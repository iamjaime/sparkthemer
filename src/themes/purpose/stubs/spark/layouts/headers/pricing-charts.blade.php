<section class="slice pb-250 bg-primary" data-offset-top="#header-main" v-if="paidPlans.length > 0 && !registerForm.invitation">
    <div class="container pt-5 mb--150 position-relative" style="z-index: 10;">
        <div class="row row-grid justify-content-center mb-7">
            <div class="col-lg-6 text-center">
                <h6 class="text-sm text-uppercase ls-2 text-white">Pricing</h6>
                <h2 class="h1 text-white">Select Your Plan</h2>

                <div class="custom-control custom-switch ml-7" v-if="hasMonthlyAndYearlyPlans">
                    <ul class="list-unstyled list-inline text-left">
                        <li class="list-inline-item text-white">Monthly</li>
                        <li class="list-inline-item">
                            <div class="ml-6">
                                <input type="checkbox" class="custom-control-input" id="show-yearly-plans" v-model="showingYearlyPlans" @click="showingYearlyPlans ? showMonthlyPlans() : showYearlyPlans()">
                                <label class="custom-control-label" for="show-yearly-plans"></label>
                            </div>
                        </li>
                        <li class="list-inline-item text-white">Yearly</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pricing card-group flex-column flex-md-row">
            <div class="card card-pricing text-center" :class="{'rounded scale-110 shadow-lg popular': isSelected(plan)}" v-for="plan in plansForActiveInterval">
                <div class="card-header py-5 border-0 delimiter-bottom">
                    <span class="d-block h5 mb-4">@{{ plan.name }}</span>
                    <div class="h1 text-primary text-center mb-0" data-pricing-value="40">
                        <span v-if="plan.price == 0" class="price">
                            {{__('Free')}}
                        </span>
                        <span v-else class="price">@{{ plan.price | currency }}
                            <span class="h6 text-muted">
                            @{{ plan.type == 'user' && spark.chargesUsersPerSeat ? '/ '+ spark.seatName : '' }}
                            @{{ plan.type == 'user' && spark.chargesUsersPerTeam ? '/ '+ __('teams.team') : '' }}
                            @{{ plan.type == 'team' && spark.chargesTeamsPerSeat ? '/ '+ spark.teamSeatName : '' }}
                            @{{ plan.type == 'team' && spark.chargesTeamsPerMember ? '/ '+ __('teams.member') : '' }}
                                / @{{ __(plan.interval) | capitalize }}
                            </span>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mb-4" v-if="plan.features">
                        <li v-for="feature in plan.features">
                            @{{ feature }}
                        </li>
                    </ul>
                    <button type="button" class="btn btn-sm btn-neutral mb-3" @click="selectPlan(plan)">Select This Plan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-container" data-shape-position="bottom" style="height: 373.281px;">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1437.24 372.58" class="ie-shape-clouds">
            <path class="fill-section-primary" d="M1.35,97.76.5-189l16,8.88s28.43-111.93,145.68-53.3c0,0,42.13-28.11,63.71,9.81,0,0,30.73-57.54,90.88-11.11,0,0,136-132.07,196.8,86.3,0,0,86.3-171.3,234.72,5.23,0,0,39.23-102.65,143.19-22.23,0,0,5.88-113.11,149.07-61.46,0,0,68.65-100,189-11.11,0,0,126.84-28.11,151.69,87,0,0,34.65-34.65,56.23-18.31l.33,267.1Z" transform="translate(-0.5 400)"></path>
            <path class="fill-section-primary opacity-5" d="M.56-113.82,1.35,97.76H1437.74l-.55-207.55s-62.35-102.82-192-23.19c0,0-50.05-64.84-110.35-5.69,0,0-22.75-37.54-52.33-13.65,0,0-18.2-75.08-87.59-30.71,0,0-29.58-18.2-36.4,8,0,0-101.25-122.86-167.23,18.2,0,0-78.49-60.29-137.65,12.51,0,0-35.27-26.16-52.33-1.14,0,0-2.28-27.3-36.4-11.38,0,0-31.85-52.33-91-21.61,0,0-48.92-64.84-111.48-6.83,0,0-62.88-21.69-72.81,29.58,0,0-44.91-23.4-43.23,19.34,0,0-39.82-51.19-81.91,4.55,0,0-54.6-44.37-94.42,9.1C70-122.74,17.56-154.95.56-113.82Z" transform="translate(-0.5 274.83)"></path>
        </svg>
    </div>


</section>

<!-- Begin the tongue -->
<section class="slice slice-sm bg-section-secondary" id="create-account-tongue"><a href="#create-account" class="tongue tongue-up" data-scroll-to>
        <i class="fas fa-angle-up"></i>
    </a>
    {{--<div class="container">--}}
        {{--<div class="row justify-content-center align-items-center">--}}
            {{--<div class="col-lg-8 text-center">--}}
                {{--<h3 class="font-weight-400">I am ready to start a new project with <span class="font-weight-700">Purpose</span> UI Kit.</h3>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</section>
<!-- End the tongue -->