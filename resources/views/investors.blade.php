<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>AgriBayani | Investors</title>

        <!-- Favicon -->
        <link
        href="/assets/img/brand/favicon.png" rel="icon" type="image/png">

        <!-- Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->
        <link href="./assets/css/nucleo-icons.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

        <!-- Soft UI Design System -->
        <link type="text/css" href="/assets/css/soft-design-system.min.css" rel="stylesheet">
        <link type="text/css" href="/assets/css/styles.css" rel="stylesheet">

    </head>

    <body
        class="bg-light">
        <!--   Core JS Files   -->
        <script crossorigin src="/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script crossorigin src="/assets/js/core/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script crossorigin src="/assets/js/soft-design-system.min.js" type="text/javascript"></script>

        @include('layouts.navigation')
        <x-header :bottom="100"/>

        <div class="container mt-7">
            <div class="row w-100">
                <div class="card m-4">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold">Your Top Investors</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary font-weight-bolder">Investor</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder">Amount invested</th>
                                    </tr>
                                </thead>
                                @foreach ($topInvestors as $investor)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 p-1">
                                                <div>
                                                    <img src="{{asset('storage/' . $investor->lender->account->picture_url) }}" class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0">{{ $investor->lender->account->first_name }}
                                                        {{ $investor->lender->account->last_name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="">
                                            <span class="text-secondary font-weight-bold">₱{{ number_format($investor->total_amount_loaned, 2) }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row w-100">
                <div class="card m-4">
                    <div class="card-header">
                        <h4 class="card-title font-weight-bold">Your Latest Investors</h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary font-weight-bolder">Investor</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder">Amount invested</th>
                                        <th class="text-uppercase text-secondary font-weight-bolder">Date</th>
                                    </tr>
                                </thead>
                                @foreach ($recentLoans as $loan)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 p-1">
                                                <div>
                                                    <img src="{{asset('storage/' . $investor->lender->account->picture_url) }}" class="avatar avatar-sm me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0">{{ $loan->lender->account->first_name }}
                                                        {{ $loan->lender->account->last_name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-secondary font-weight-bold">₱{{ number_format($loan->amount_loaned, 2) }}</span>
                                        </td>
                                        <td>
                                            <span class="text-secondary font-weight-bold">{{ $loan->created_at->format('F j, Y') }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

