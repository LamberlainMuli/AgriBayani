<x-app-layout>
    <x-header :bottom="100"/>

    <div class="container exploremt">
        <div class="row">
        @forelse ($borrowers as $borrower)
            <div class="col-md-4"> 
                <div class="card m-4 p-0">
                <div class="card-header p-0">
                    <a href="" class="d-block">
                    <img
                        src="{{ asset('storage/' . $borrower->account->picture_url) }}"
                        class="img-fluid border-radius-lg-top">
                    </a>
                </div>

                <div class="card-body pt-3">
                    <div class="row">
                    <div class="col">
                        <a href="" class="card-title h4 mb-0 d-block text-darker">{{ $borrower->account->first_name }} {{ $borrower->account->last_name }}</a>
                        <span class="w-auto badge bg-gradient-success text-uppercase text-xs font-weight-bold my-2"><i
                            class="bi bi-geo-alt-fill mr-4" style="margin-right: 4pt;"></i>Location</span>
                        <p class="card-description mb-4">
                        {{ $borrower->description }} 
                        </p>
                        <div class="progress-wrapper w-100">
                        <div class="progress-info">
                            <div class="progress-percentage" style="text-align: right;">
                            <span class="text-sm font-weight-bold">₱{{ $borrower->goal_amount - $borrower->amount_received }} left</span>
                            </div>
                        </div>
                        <div class="progress w-100">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                            aria-valuemax="100" style="width: {{ $borrower->amount_received / max(1,$borrower->goal_amount) * 100 }}%;"></div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="row mt-4 text-center">
                    <div class="col">
                        <p class="font-weight-bold text-lg h5 mb-0">{{ ceil($borrower->amount_received / max(1, $borrower->goal_amount) * 100) }}%</p>
                        <p class="text-muted text-sm text-uppercase mt-0">Funded</p>
                    </div>
                    <div class="col">
                        <p class="font-weight-bold text-lg h5 mb-0">₱{{ $borrower->amount_received }}</p>
                        <p class="color-secondary text-sm text-uppercase mt-0">Lent</p>
                    </div>
                    <div class="col">
                        <a href="{{ route('loan.create', ['borrower_id' => $borrower->id]) }}" class="btn btn-sm m-1 bg-gradient-success" style="float: right;">Lend</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</x-app-layout>