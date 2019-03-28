@extends('spark::layouts.app')

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
@endpush

@section('content')
<spark-register-stripe inline-template>
    <div>

        @include('spark::layouts.headers.dark')

        @include('spark::layouts.headers.pricing-charts')


        <div id="omnisearch" class="omnisearch">
            <div class="container">
                <!-- Search form -->
                <form class="omnisearch-form">
                    <div class="form-group">
                        <div class="input-group input-group-merge input-group-flush">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Type and hit enter ...">
                        </div>
                    </div>
                </form>
                <div class="omnisearch-suggestions">
                    <h6 class="heading">Search Suggestions</h6>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>iphone 8</span> in Smartphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>macbook pro</span> in Laptops
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>beats pro solo 3</span> in Headphones
                                    </a>
                                </li>
                                <li>
                                    <a class="list-link" href="#">
                                        <i class="fas fa-search"></i>
                                        <span>smasung galaxy 10</span> in Phones
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content">
            <section class="slice slice-sm min-vh-100 d-flex align-items-center bg-section-secondary">
                <!-- SVG background -->
                <div class="bg-absolute-cover bg-size--contain d-none d-lg-block">
                    <figure class="w-100">
                        <img alt="" src="/assets/img/svg/backgrounds/bg-3.svg" class="svg-inject">
                    </figure>
                </div>
                <div class="container py-5 px-md-0 d-flex align-items-center" id="create-account">
                    <div class="w-100">
                        <div class="row row-grid justify-content-center justify-content-lg-between align-items-center">
                            <div class="col-sm-8 col-lg-6 col-xl-5 order-lg-2">
                                <div class="card shadow zindex-100 mb-0">
                                    <div class="card-body px-md-5 py-5">
                                        <div class="mb-5">
                                            <h6 class="h3">Create account</h6>
                                            <p class="text-muted mb-0">Made with love by developers for developers.</p>
                                        </div>
                                        <span class="clearfix"></span>

                                        <!-- Generic Error Message -->
                                        <div class="alert alert-danger" v-if="registerForm.errors.has('form')">
                                            @{{ registerForm.errors.get('form') }}
                                        </div>

                                        <!-- Invitation Code Error -->
                                        <div class="alert alert-danger" v-if="registerForm.errors.has('invitation')">
                                            @{{ registerForm.errors.get('invitation') }}
                                        </div>

                                        <!-- Coupon -->
                                        <div class="alert alert-success" v-if="coupon">
                                            <?php echo __('The coupon :value discount will be applied to your subscription!', ['value' => '{{ discount }}']); ?>
                                        </div>

                                        <!-- Invalid Coupon -->
                                        <div class="alert alert-danger" v-if="invalidCoupon">
                                            {{__('Whoops! This coupon code is invalid.')}}
                                        </div>

                                        <!-- Invitation -->
                                        <div class="alert alert-success" v-if="invitation">
                                            <?php echo __('teams.we_found_invitation_to_team', ['teamName' => '{{ invitation.team.name }}']); ?>
                                        </div>

                                        <!-- Invalid Invitation -->
                                        <div class="alert alert-danger" v-if="invalidInvitation">
                                            {{__('Whoops! This invitation code is invalid.')}}
                                        </div>

                                        <!-- Plan Error Message - In General Will Never Be Shown -->
                                        <div class="alert alert-danger m-4" v-if="registerForm.errors.has('plan')">
                                            @{{ registerForm.errors.get('plan') }}
                                        </div>

                                        <!-- European VAT Notice -->
                                        @if (Spark::collectsEuropeanVat())
                                            <p class="m-4">
                                                {{__('All subscription plan prices are excluding applicable VAT.')}}
                                            </p>
                                        @endif


                                        <!-- Generic 500 Level Error Message / Stripe Threw Exception -->
                                        <div class="alert alert-danger" v-if="registerForm.errors.has('form')">
                                            {{__('We had trouble validating your card. It\'s possible your card provider is preventing us from charging the card. Please contact your card provider or customer support.')}}
                                        </div>


                                        <!-- Begin Registration Form -->
                                        @include('spark::auth.register-common-form')
                                        <!-- End Registration Form -->

                                    </div>
                                    <div class="card-footer px-md-5"><small>Already have an acocunt?</small>
                                        <a href="/login" class="small font-weight-bold">Sign in</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-lg-1 d-none d-lg-block">
                                <blockquote>
                                    <h3 class="h2 mb-4">Keep your face always toward the sunshine - and shadows will fall behind you.</h3>
                                    <footer>— <cite class="text-lg">John Sulivan</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</spark-register-stripe>
@endsection
