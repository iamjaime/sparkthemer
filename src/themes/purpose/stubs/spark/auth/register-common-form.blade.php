<form role="form">
    @if (Spark::usesTeams() && Spark::onlyTeamPlans())
        <!-- Team Name -->
        <div class="form-group" v-if=" ! invitation">
            <label class="form-control-label">{{ __('teams.team_name') }}</label>
            <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="input-team" name="team" v-model="registerForm.team" placeholder="name@example.com" :class="{'is-invalid': registerForm.errors.has('team')}" autofocus>

                <small class="invalid-feedback text-danger" v-show="registerForm.errors.has('team')">
                    @{{ registerForm.errors.get('team') }}
                </small>
            </div>
        </div>

        @if (Spark::teamsIdentifiedByPath())
            <!-- Team Slug (Only Shown When Using Paths For Teams) -->
            <div class="form-group" v-if=" ! invitation">
                <label class="form-control-label">{{ __('teams.team_slug') }}</label>
                <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="input-team-slug" name="team_slug" v-model="registerForm.team_slug" placeholder="name@example.com" :class="{'is-invalid': registerForm.errors.has('team_slug')}" autofocus>

                    <small class="form-text text-muted" v-show="! registerForm.errors.has('team_slug')">
                        {{__('teams.slug_input_explanation')}}
                    </small>

                    <small class="invalid-feedback text-danger" v-show="registerForm.errors.has('team_slug')">
                        @{{ registerForm.errors.get('team_slug') }}
                    </small>
                </div>
            </div>
        @endif
    @endif

    <!-- Name -->
    <div class="form-group">
        <label class="form-control-label">{{__('Name')}}</label>
        <div class="input-group input-group-merge">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" id="input-name" name="name" v-model="registerForm.name" placeholder="name@example.com" :class="{'is-invalid': registerForm.errors.has('name')}" autofocus>

            <small class="invalid-feedback text-danger" v-show="registerForm.errors.has('name')">
                @{{ registerForm.errors.get('name') }}
            </small>
        </div>
    </div>


    <!-- E-Mail Address -->
    <div class="form-group">
        <label class="form-control-label">{{__('E-Mail Address')}}</label>
        <div class="input-group input-group-merge">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="email" class="form-control" id="input-email" name="email" v-model="registerForm.email" placeholder="name@example.com" :class="{'is-invalid': registerForm.errors.has('email')}" autofocus>

            <small class="invalid-feedback text-danger" v-show="registerForm.errors.has('email')">
                @{{ registerForm.errors.get('email') }}
            </small>
        </div>
    </div>


    <!-- Password -->
    <div class="form-group">
        <label class="form-control-label">{{__('Password')}}</label>
        <div class="input-group input-group-merge">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="password" class="form-control" id="input-password" name="password" v-model="registerForm.password" placeholder="" :class="{'is-invalid': registerForm.errors.has('password')}" autofocus>

            <small class="invalid-feedback text-danger" v-show="registerForm.errors.has('password')">
                @{{ registerForm.errors.get('password') }}
            </small>
        </div>
    </div>


    <!-- Password Confirmation -->
    <div class="form-group">
        <label class="form-control-label">{{__('Confirm Password')}}</label>
        <div class="input-group input-group-merge">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="password" class="form-control" id="input-password-confirmation" name="password_confirmation" v-model="registerForm.password_confirmation" placeholder="" :class="{'is-invalid': registerForm.errors.has('password_confirmation')}" autofocus>

            <small class="invalid-feedback text-danger" v-show="registerForm.errors.has('password_confirmation')">
                @{{ registerForm.errors.get('password_confirmation') }}
            </small>
        </div>
    </div>


    <!-- Billing Information -->
    <section id="billing-info" v-if="selectedPlan && selectedPlan.price > 0">
        <div class="form-group">
            <strong class="text-dark mt-2 mb-2">{{__('Billing Information')}}</strong>
        </div>


        <!-- Cardholder's Name -->
        <div class="form-group">
            <label class="form-control-label">{{__('Cardholder\'s Name')}}</label>
            <div class="input-group input-group-merge">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" id="input-card-holder-name" name="name" v-model="cardForm.name" placeholder="">
            </div>
        </div>


        <!-- Card Details -->
        <div class="form-group">
            <label class="form-control-label">{{__('Card')}}</label>
            <div id="card-element"></div>
            <small class="invalid-feedback" v-show="cardForm.errors.has('card')">
                @{{ cardForm.errors.get('card') }}
            </small>
        </div>



        <!-- Billing Address Fields -->
        @if (Spark::collectsBillingAddress())
            @include('spark::auth.register-address')
        @endif


        <!-- ZIP Code -->
        <div class="form-group" v-if=" ! spark.collectsBillingAddress">
            <label class="form-control-label">{{__('ZIP / Postal Code')}}</label>
                <input type="text" class="form-control" id="input-card-holder-zip" name="zip" v-model="cardForm.zip" placeholder="" :class="{'is-invalid': registerForm.errors.has('zip')}">
                <small class="invalid-feedback" v-show="registerForm.errors.has('zip')">
                    @{{ registerForm.errors.get('zip') }}
                </small>
        </div>

        <!-- Coupon Code -->
        <div class="form-group row" v-if="query.coupon">
            <label class="form-control-label">{{__('Coupon Code')}}</label>
                <input type="text" class="form-control" id="input-coupon" name="coupon" v-model="registerForm.coupon" placeholder="" :class="{'is-invalid': registerForm.errors.has('coupon')}">
                <span class="invalid-feedback" v-show="registerForm.errors.has('coupon')">
                    @{{ registerForm.errors.get('coupon') }}
                </span>
        </div>

        <!-- Terms And Conditions -->
        <div class="my-4">
            <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="check-terms" :class="{'is-invalid': registerForm.errors.has('terms')}" v-model="registerForm.terms">
                <label class="custom-control-label" for="check-terms">
                    {!! __('I Accept :linkOpen The Terms Of Service :linkClose', ['linkOpen' => '<a href="/terms" target="_blank">', 'linkClose' => '</a>']) !!}
                </label>
                <small class="invalid-feedback" v-show="registerForm.errors.has('terms')">
                    <strong>@{{ registerForm.errors.get('terms') }}</strong>
                </small>
            </div>
            {{--<div class="custom-control custom-checkbox">--}}
            {{--<input type="checkbox" class="custom-control-input" id="check-privacy">--}}
            {{--<label class="custom-control-label" for="check-privacy">I agree to the <a href="#">privacy policy</a></label>--}}
            {{--</div>--}}
        </div>

        <!-- Tax / Price Information -->
        <div class="form-group" v-if="spark.collectsEuropeanVat && countryCollectsVat && selectedPlan">
            <label class="form-control-label">&nbsp;</label>
            <div class="alert alert-info" style="margin: 0;">
                <strong>{{__('Tax')}}:</strong> @{{ taxAmount(selectedPlan) | currency }}
                <br><br>
                <strong>{{__('Total Price Including Tax')}}:</strong>
                @{{ priceWithTax(selectedPlan) | currency }}
                @{{ selectedPlan.type == 'user' && spark.chargesUsersPerSeat ? '/ '+ spark.seatName : '' }}
                @{{ selectedPlan.type == 'user' && spark.chargesUsersPerTeam ? '/ '+ __('teams.team') : '' }}
                @{{ selectedPlan.type == 'team' && spark.chargesTeamsPerSeat ? '/ '+ spark.teamSeatName : '' }}
                @{{ selectedPlan.type == 'team' && spark.chargesTeamsPerMember ? '/ '+ __('teams.member') : '' }}
                / @{{ __(selectedPlan.interval) | capitalize }}
            </div>
        </div>


    </section>


    <!-- Terms And Conditions -->
    <div class="my-4" v-if=" ! selectedPlan || selectedPlan.price == 0">
        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="check-terms" :class="{'is-invalid': registerForm.errors.has('terms')}" v-model="registerForm.terms">
            <label class="custom-control-label" for="check-terms">
                {!! __('I Accept :linkOpen The Terms Of Service :linkClose', ['linkOpen' => '<a href="/terms" target="_blank">', 'linkClose' => '</a>']) !!}
            </label>
            <small class="invalid-feedback" v-show="registerForm.errors.has('terms')">
                <strong>@{{ registerForm.errors.get('terms') }}</strong>
            </small>
        </div>
        {{--<div class="custom-control custom-checkbox">--}}
            {{--<input type="checkbox" class="custom-control-input" id="check-privacy">--}}
            {{--<label class="custom-control-label" for="check-privacy">I agree to the <a href="#">privacy policy</a></label>--}}
        {{--</div>--}}
    </div>
    <div class="mt-4">
        <button type="button" class="btn btn-sm btn-primary btn-icon rounded-pill" @click.prevent="register" :disabled="registerForm.busy">
            <span class="btn-inner--icon" v-if="registerForm.busy">
                <i class="fa fa-btn fa-spinner fa-spin"></i> {{__('Registering')}}
            </span>
            <span class="btn-inner--text" v-else>
                <i class="fa fa-btn fa-check-circle"></i> {{__('Register')}}
            </span>
            <span class="btn-inner--icon"><i class="fas fa-long-arrow-alt-right"></i></span>
        </button>
    </div>

</form>