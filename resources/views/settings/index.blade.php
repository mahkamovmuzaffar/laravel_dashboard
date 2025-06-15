@extends('layouts.master')

@section('title') @lang('translation.Settings') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') System @endslot
        @slot('title') @lang('translation.Settings') @endslot
    @endcomponent

    <div class="container-fluid">
        <form action="{{ route('settings.update') }}" method="POST">
            @csrf

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">API & Integration Settings</h4>

                    <!-- Telegram Token -->
                    <div class="mb-3">
                        <label for="telegram_token" class="form-label">Telegram Bot Token</label>
                        <input type="text" class="form-control" id="telegram_token"
                               name="telegram_token"
                               value="{{ old('telegram_token', $settings['telegram_token'] ?? '') }}"
                               placeholder="Enter your Telegram Bot Token">
                    </div>

                    <!-- WhatsApp Token -->
                    <div class="mb-3">
                        <label for="whatsapp_token" class="form-label">WhatsApp Token</label>
                        <input type="text" class="form-control" id="whatsapp_token"
                               name="whatsapp_token"
                               value="{{ old('whatsapp_token', $settings['whatsapp_token'] ?? '') }}"
                               placeholder="Enter your WhatsApp Token">
                    </div>

                    <!-- OpenAI API Key -->
                    <div class="mb-3">
                        <label for="openai_key" class="form-label">OpenAI API Key</label>
                        <input type="text" class="form-control" id="openai_key"
                               name="openai_key"
                               value="{{ old('openai_key', $settings['openai_key'] ?? '') }}"
                               placeholder="Enter your OpenAI API Key">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
