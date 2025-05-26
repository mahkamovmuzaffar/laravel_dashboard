<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-home-circle"></i><span class="badge rounded-pill bg-info float-end">04</span>
                        <span key="t-dashboards"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index" key="t-default"><?php echo app('translator')->get('translation.Default'); ?></a></li>
                        <li><a href="dashboard-saas" key="t-saas"><?php echo app('translator')->get('translation.Saas'); ?></a></li>
                        <li><a href="dashboard-crypto" key="t-crypto"><?php echo app('translator')->get('translation.Crypto'); ?></a></li>
                        <li><a href="dashboard-blog" key="t-blog"><?php echo app('translator')->get('translation.Blog'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span key="t-layouts"><?php echo app('translator')->get('translation.Layouts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-vertical"><?php echo app('translator')->get('translation.Vertical'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-light-sidebar"
                                        key="t-light-sidebar"><?php echo app('translator')->get('translation.Light_Sidebar'); ?></a></li>
                                <li><a href="layouts-compact-sidebar"
                                        key="t-compact-sidebar"><?php echo app('translator')->get('translation.Compact_Sidebar'); ?></a></li>
                                <li><a href="layouts-icon-sidebar"
                                        key="t-icon-sidebar"><?php echo app('translator')->get('translation.Icon_Sidebar'); ?></a></li>
                                <li><a href="layouts-boxed" key="t-boxed-width"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a>
                                </li>
                                <li><a href="layouts-preloader" key="t-preloader"><?php echo app('translator')->get('translation.Preloader'); ?></a>
                                </li>
                                <li><a href="layouts-colored-sidebar"
                                        key="t-colored-sidebar"><?php echo app('translator')->get('translation.Colored_Sidebar'); ?></a></li>
                                <li><a href="layouts-scrollable" key="t-scrollable"><?php echo app('translator')->get('translation.Scrollable'); ?></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="layouts-horizontal" key="t-horizontal"><?php echo app('translator')->get('translation.Horizontal'); ?></a>
                                </li>
                                <li><a href="layouts-hori-topbar-light"
                                        key="t-topbar-light"><?php echo app('translator')->get('translation.Topbar_Light'); ?></a></li>
                                <li><a href="layouts-hori-boxed-width"
                                        key="t-boxed-width"><?php echo app('translator')->get('translation.Boxed_Width'); ?></a></li>
                                <li><a href="layouts-hori-preloader"
                                        key="t-preloader"><?php echo app('translator')->get('translation.Preloader'); ?></a></li>
                                <li><a href="layouts-hori-colored-header"
                                        key="t-colored-topbar"><?php echo app('translator')->get('translation.Colored_Header'); ?></a></li>
                                <li><a href="layouts-hori-scrollable"
                                        key="t-scrollable"><?php echo app('translator')->get('translation.Scrollable'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="menu-title" key="t-apps"><?php echo app('translator')->get('translation.Apps'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bx-calendar"></i><span class="badge rounded-pill bg-success float-end">New</span>
                        <span key="t-dashboards"><?php echo app('translator')->get('translation.Calendars'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="calendar" key="t-tui-calendar"><?php echo app('translator')->get('translation.TUI_Calendar'); ?></a></li>
                        <li><a href="calendar-full" key="t-full-calendar"><?php echo app('translator')->get('translation.Full_Calendar'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="chat" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-chat"><?php echo app('translator')->get('translation.Chat'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="apps-filemanager" class="waves-effect">
                        <i class="bx bx-file"></i>
                        <span class="badge rounded-pill bg-success float-end"
                            key="t-new"><?php echo app('translator')->get('translation.New'); ?></span>
                        <span key="t-file-manager"><?php echo app('translator')->get('translation.File_Manager'); ?></span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce"><?php echo app('translator')->get('translation.Ecommerce'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ecommerce-products" key="t-products"><?php echo app('translator')->get('translation.Products'); ?></a></li>
                        <li><a href="ecommerce-product-detail"
                                key="t-product-detail"><?php echo app('translator')->get('translation.Product_Detail'); ?></a></li>
                        <li><a href="ecommerce-orders" key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a></li>
                        <li><a href="ecommerce-customers" key="t-customers"><?php echo app('translator')->get('translation.Customers'); ?></a></li>
                        <li><a href="ecommerce-cart" key="t-cart"><?php echo app('translator')->get('translation.Cart'); ?></a></li>
                        <li><a href="ecommerce-checkout" key="t-checkout"><?php echo app('translator')->get('translation.Checkout'); ?></a></li>
                        <li><a href="ecommerce-shops" key="t-shops"><?php echo app('translator')->get('translation.Shops'); ?></a></li>
                        <li><a href="ecommerce-add-product" key="t-add-product"><?php echo app('translator')->get('translation.Add_Product'); ?></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-bitcoin"></i>
                        <span key="t-crypto"><?php echo app('translator')->get('translation.Crypto'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="crypto-wallet" key="t-wallet"><?php echo app('translator')->get('translation.Wallet'); ?></a></li>
                        <li><a href="crypto-buy-sell" key="t-buy"><?php echo app('translator')->get('translation.Buy_Sell'); ?></a></li>
                        <li><a href="crypto-exchange" key="t-exchange"><?php echo app('translator')->get('translation.Exchange'); ?></a></li>
                        <li><a href="crypto-lending" key="t-lending"><?php echo app('translator')->get('translation.Lending'); ?></a></li>
                        <li><a href="crypto-orders" key="t-orders"><?php echo app('translator')->get('translation.Orders'); ?></a></li>
                        <li><a href="crypto-kyc-application" key="t-kyc"><?php echo app('translator')->get('translation.KYC_Application'); ?></a></li>
                        <li><a href="crypto-ico-landing" key="t-ico"><?php echo app('translator')->get('translation.ICO_Landing'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-envelope"></i>
                        <span key="t-email"><?php echo app('translator')->get('translation.Email'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="email-inbox" key="t-inbox"><?php echo app('translator')->get('translation.Inbox'); ?></a></li>
                        <li><a href="email-read" key="t-read-email"><?php echo app('translator')->get('translation.Read_Email'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);">
                                <span class="badge rounded-pill badge-soft-success float-end"
                                    key="t-new"><?php echo app('translator')->get('translation.New'); ?></span>
                                <span key="t-email-templates"><?php echo app('translator')->get('translation.Templates'); ?></span>
                            </a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="email-template-basic"
                                        key="t-basic-action"><?php echo app('translator')->get('translation.Basic_Action'); ?></a></li>
                                <li><a href="email-template-alert"
                                        key="t-alert-email"><?php echo app('translator')->get('translation.Alert_Email'); ?></a></li>
                                <li><a href="email-template-billing"
                                        key="t-bill-email"><?php echo app('translator')->get('translation.Billing_Email'); ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices"><?php echo app('translator')->get('translation.Invoices'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="invoices-list" key="t-invoice-list"><?php echo app('translator')->get('translation.Invoice_List'); ?></a></li>
                        <li><a href="invoices-detail" key="t-invoice-detail"><?php echo app('translator')->get('translation.Invoice_Detail'); ?></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span key="t-projects"><?php echo app('translator')->get('translation.Projects'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="projects-grid" key="t-p-grid"><?php echo app('translator')->get('translation.Projects_Grid'); ?></a></li>
                        <li><a href="projects-list" key="t-p-list"><?php echo app('translator')->get('translation.Projects_List'); ?></a></li>
                        <li><a href="projects-overview" key="t-p-overview"><?php echo app('translator')->get('translation.Project_Overview'); ?></a>
                        </li>
                        <li><a href="projects-create" key="t-create-new"><?php echo app('translator')->get('translation.Create_New'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-task"></i>
                        <span key="t-tasks"><?php echo app('translator')->get('translation.Tasks'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tasks-list" key="t-task-list"><?php echo app('translator')->get('translation.Task_List'); ?></a></li>
                        <li><a href="tasks-kanban" key="t-kanban-board"><?php echo app('translator')->get('translation.Kanban_Board'); ?></a></li>
                        <li><a href="tasks-create" key="t-create-task"><?php echo app('translator')->get('translation.Create_Task'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-user-detail"></i>
                        <span key="t-contacts"><?php echo app('translator')->get('translation.Contacts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="contacts-grid" key="t-user-grid"><?php echo app('translator')->get('translation.User_Grid'); ?></a></li>
                        <li><a href="contacts-list" key="t-user-list"><?php echo app('translator')->get('translation.User_List'); ?></a></li>
                        <li><a href="contacts-profile" key="t-profile"><?php echo app('translator')->get('translation.Profile'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end"
                            key="t-new"><?php echo app('translator')->get('translation.New'); ?></span>
                        <i class="bx bx-detail"></i>
                        <span key="t-blog"><?php echo app('translator')->get('translation.Blog'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="blog-list" key="t-blog-list"><?php echo app('translator')->get('translation.Blog_List'); ?></a></li>
                        <li><a href="blog-grid" key="t-blog-grid"><?php echo app('translator')->get('translation.Blog_Grid'); ?></a></li>
                        <li><a href="blog-details" key="t-blog-details"><?php echo app('translator')->get('translation.Blog_Details'); ?></a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-pages"><?php echo app('translator')->get('translation.Pages'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <span class="badge rounded-pill bg-success float-end"
                            key="t-new"><?php echo app('translator')->get('translation.New'); ?></span>
                        <i class="bx bx-user-circle"></i>
                        <span key="t-authentication"><?php echo app('translator')->get('translation.Authentication'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login" key="t-login"><?php echo app('translator')->get('translation.Login'); ?></a></li>
                        <li><a href="auth-login-2" key="t-login-2"><?php echo app('translator')->get('translation.Login'); ?> 2</a></li>
                        <li><a href="auth-register" key="t-register"><?php echo app('translator')->get('translation.Register'); ?></a></li>
                        <li><a href="auth-register-2" key="t-register-2"><?php echo app('translator')->get('translation.Register'); ?> 2</a></li>
                        <li><a href="auth-recoverpw" key="t-recover-password"><?php echo app('translator')->get('translation.Recover_Password'); ?></a>
                        </li>
                        <li><a href="auth-recoverpw-2" key="t-recover-password-2"><?php echo app('translator')->get('translation.Recover_Password'); ?>
                                2</a></li>
                        <li><a href="auth-lock-screen" key="t-lock-screen"><?php echo app('translator')->get('translation.Lock_Screen'); ?></a></li>
                        <li><a href="auth-lock-screen-2" key="t-lock-screen-2"><?php echo app('translator')->get('translation.Lock_Screen'); ?> 2</a>
                        </li>
                        <li><a href="auth-confirm-mail" key="t-confirm-mail"><?php echo app('translator')->get('translation.Confirm_Mail'); ?></a></li>
                        <li><a href="auth-confirm-mail-2" key="t-confirm-mail-2"><?php echo app('translator')->get('translation.Confirm_Mail'); ?> 2</a>
                        </li>
                        <li><a href="auth-email-verification"
                                key="t-email-verification"><?php echo app('translator')->get('translation.Email_verification'); ?></a></li>
                        <li><a href="auth-email-verification-2"
                                key="t-email-verification-2"><?php echo app('translator')->get('translation.Email_verification'); ?> 2</a></li>
                        <li><a href="auth-two-step-verification"
                                key="t-two-step-verification"><?php echo app('translator')->get('translation.Two_step_verification'); ?></a></li>
                        <li><a href="auth-two-step-verification-2"
                                key="t-two-step-verification-2"><?php echo app('translator')->get('translation.Two_step_verification'); ?> 2</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-utility"><?php echo app('translator')->get('translation.Utility'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter" key="t-starter-page"><?php echo app('translator')->get('translation.Starter_Page'); ?></a></li>
                        <li><a href="pages-maintenance" key="t-maintenance"><?php echo app('translator')->get('translation.Maintenance'); ?></a></li>
                        <li><a href="pages-comingsoon" key="t-coming-soon"><?php echo app('translator')->get('translation.Coming_Soon'); ?></a></li>
                        <li><a href="pages-timeline" key="t-timeline"><?php echo app('translator')->get('translation.Timeline'); ?></a></li>
                        <li><a href="pages-faqs" key="t-faqs"><?php echo app('translator')->get('translation.FAQs'); ?></a></li>
                        <li><a href="pages-pricing" key="t-pricing"><?php echo app('translator')->get('translation.Pricing'); ?></a></li>
                        <li><a href="pages-404" key="t-error-404"><?php echo app('translator')->get('translation.Error_404'); ?></a></li>
                        <li><a href="pages-500" key="t-error-500"><?php echo app('translator')->get('translation.Error_500'); ?></a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-components"><?php echo app('translator')->get('translation.Components'); ?></li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-tone"></i>
                        <span key="t-ui-elements"><?php echo app('translator')->get('translation.UI_Elements'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts" key="t-alerts"><?php echo app('translator')->get('translation.Alerts'); ?></a></li>
                        <li><a href="ui-buttons" key="t-buttons"><?php echo app('translator')->get('translation.Buttons'); ?></a></li>
                        <li><a href="ui-cards" key="t-cards"><?php echo app('translator')->get('translation.Cards'); ?></a></li>
                        <li><a href="ui-carousel" key="t-carousel"><?php echo app('translator')->get('translation.Carousel'); ?></a></li>
                        <li><a href="ui-dropdowns" key="t-dropdowns"><?php echo app('translator')->get('translation.Dropdowns'); ?></a></li>
                        <li><a href="ui-grid" key="t-grid"><?php echo app('translator')->get('translation.Grid'); ?></a></li>
                        <li><a href="ui-images" key="t-images"><?php echo app('translator')->get('translation.Images'); ?></a></li>
                        <li><a href="ui-lightbox" key="t-lightbox"><?php echo app('translator')->get('translation.Lightbox'); ?></a></li>
                        <li><a href="ui-modals" key="t-modals"><?php echo app('translator')->get('translation.Modals'); ?></a></li>
                        <li><a href="ui-offcanvas" key="t-offcanvas"><?php echo app('translator')->get('translation.Offcanvas'); ?></a></li>
                        <li><a href="ui-rangeslider" key="t-range-slider"><?php echo app('translator')->get('translation.Range_Slider'); ?></a></li>
                        <li><a href="ui-session-timeout" key="t-session-timeout"><?php echo app('translator')->get('translation.Session_Timeout'); ?></a></li>
                        <li><a href="ui-progressbars" key="t-progress-bars"><?php echo app('translator')->get('translation.Progress_Bars'); ?></a></li>
                        <li><a href="ui-placeholders" key="t-placeholders"><?php echo app('translator')->get('translation.Placeholders'); ?></a></li>
                        <li><a href="ui-sweet-alert" key="t-sweet-alert"><?php echo app('translator')->get('translation.Sweet_Alert'); ?></a></li>
                        <li><a href="ui-tabs-accordions" key="t-tabs-accordions"><?php echo app('translator')->get('translation.Tabs_&_Accordions'); ?></a></li>
                        <li><a href="ui-typography" key="t-typography"><?php echo app('translator')->get('translation.Typography'); ?></a></li>
                        <li><a href="ui-toasts" key="t-toasts"><?php echo app('translator')->get('translation.Toasts'); ?></a></li>
                        <li><a href="ui-video" key="t-video"><?php echo app('translator')->get('translation.Video'); ?></a></li>
                        <li><a href="ui-general" key="t-general"><?php echo app('translator')->get('translation.General'); ?></a></li>
                        <li><a href="ui-colors" key="t-colors"><?php echo app('translator')->get('translation.Colors'); ?></a></li>
                        <li><a href="ui-rating" key="t-rating"><?php echo app('translator')->get('translation.Rating'); ?></a></li>
                        <li><a href="ui-notifications" key="t-notifications"><?php echo app('translator')->get('translation.Notifications'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="bx bxs-eraser"></i>
                        <span class="badge rounded-pill bg-danger float-end">10</span>
                        <span key="t-forms"><?php echo app('translator')->get('translation.Forms'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="form-elements" key="t-form-elements"><?php echo app('translator')->get('translation.Form_Elements'); ?></a></li>
                        <li><a href="form-layouts" key="t-form-layouts"><?php echo app('translator')->get('translation.Form_Layouts'); ?></a></li>
                        <li><a href="form-validation" key="t-form-validation"><?php echo app('translator')->get('translation.Form_Validation'); ?></a>
                        </li>
                        <li><a href="form-advanced" key="t-form-advanced"><?php echo app('translator')->get('translation.Form_Advanced'); ?></a></li>
                        <li><a href="form-editors" key="t-form-editors"><?php echo app('translator')->get('translation.Form_Editors'); ?></a></li>
                        <li><a href="form-uploads" key="t-form-upload"><?php echo app('translator')->get('translation.Form_File_Upload'); ?></a></li>
                        <li><a href="form-xeditable" key="t-form-xeditable"><?php echo app('translator')->get('translation.Form_Xeditable'); ?></a></li>
                        <li><a href="form-repeater" key="t-form-repeater"><?php echo app('translator')->get('translation.Form_Repeater'); ?></a></li>
                        <li><a href="form-wizard" key="t-form-wizard"><?php echo app('translator')->get('translation.Form_Wizard'); ?></a></li>
                        <li><a href="form-mask" key="t-form-mask"><?php echo app('translator')->get('translation.Form_Mask'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-tables"><?php echo app('translator')->get('translation.Tables'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="tables-basic" key="t-basic-tables"><?php echo app('translator')->get('translation.Basic_Tables'); ?></a></li>
                        <li><a href="tables-datatable" key="t-data-tables"><?php echo app('translator')->get('translation.Data_Tables'); ?></a></li>
                        <li><a href="tables-responsive"
                                key="t-responsive-table"><?php echo app('translator')->get('translation.Responsive_Table'); ?></a></li>
                        <li><a href="tables-editable" key="t-editable-table"><?php echo app('translator')->get('translation.Editable_Table'); ?></a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-bar-chart-alt-2"></i>
                        <span key="t-charts"><?php echo app('translator')->get('translation.Charts'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="charts-apex" key="t-apex-charts"><?php echo app('translator')->get('translation.Apex_Charts'); ?></a></li>
                        <li><a href="charts-echart" key="t-e-charts"><?php echo app('translator')->get('translation.E_Charts'); ?></a></li>
                        <li><a href="charts-chartjs" key="t-chartjs-charts"><?php echo app('translator')->get('translation.Chartjs_Charts'); ?></a></li>
                        <li><a href="charts-flot" key="t-flot-charts"><?php echo app('translator')->get('translation.Flot_Charts'); ?></a></li>
                        <li><a href="charts-tui" key="t-ui-charts"><?php echo app('translator')->get('translation.Toast_UI_Charts'); ?></a></li>
                        <li><a href="charts-knob" key="t-knob-charts"><?php echo app('translator')->get('translation.Jquery_Knob_Charts'); ?></a></li>
                        <li><a href="charts-sparkline"
                                key="t-sparkline-charts"><?php echo app('translator')->get('translation.Sparkline_Charts'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-aperture"></i>
                        <span key="t-icons"><?php echo app('translator')->get('translation.Icons'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="icons-boxicons" key="t-boxicons"><?php echo app('translator')->get('translation.Boxicons'); ?></a></li>
                        <li><a href="icons-materialdesign"
                                key="t-material-design"><?php echo app('translator')->get('translation.Material_Design'); ?></a></li>
                        <li><a href="icons-dripicons" key="t-dripicons"><?php echo app('translator')->get('translation.Dripicons'); ?></a></li>
                        <li><a href="icons-fontawesome" key="t-font-awesome"><?php echo app('translator')->get('translation.Font_awesome'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-map"></i>
                        <span key="t-maps"><?php echo app('translator')->get('translation.Maps'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="maps-google" key="t-g-maps"><?php echo app('translator')->get('translation.Google_Maps'); ?></a></li>
                        <li><a href="maps-vector" key="t-v-maps"><?php echo app('translator')->get('translation.Vector_Maps'); ?></a></li>
                        <li><a href="maps-leaflet" key="t-l-maps"><?php echo app('translator')->get('translation.Leaflet_Maps'); ?></a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-share-alt"></i>
                        <span key="t-multi-level"><?php echo app('translator')->get('translation.Multi_Level'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="javascript: void(0);" key="t-level-1-1"><?php echo app('translator')->get('translation.Level_1.1'); ?></a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-level-1-2"><?php echo app('translator')->get('translation.Level_1.2'); ?></a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href="javascript: void(0);" key="t-level-2-1"><?php echo app('translator')->get('translation.Level_2.1'); ?></a>
                                </li>
                                <li><a href="javascript: void(0);" key="t-level-2-2"><?php echo app('translator')->get('translation.Level_2.2'); ?></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH D:\OSPanel\domains\skote.test\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>