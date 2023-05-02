<x-app-layout>
    <x-header :bottom="100"/>

    <div class="container mt-6">
        <div class="row w-100">
            <div class="col-12 col-lg-6">
                @forelse($posts as $post)
                <div class="row w-100">
                    <div class="card m-4">
                        <div class="card-header">
                            <h3 class="card-title">{{ $post->title }}</h3>
                            <div class="row w-100">
                                <div class="author align-items-center pb-0">
                                    <div class="col w-100">
                                        <img src="{{asset('storage/' . $post->borrower->account->picture_url) }}" class="avatar shadow mb-4">
                                        <div class="name ps-3 d-inline-block">
                                            <span><strong>{{ $post->borrower->account->first_name }} {{ $post->borrower->account->last_name }}</strong></span>
                                            <div class="stats">
                                                <small>{{ $post->created_at->format('F j, Y, g:i a') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col w-100">
                                        <span style="">
                                            <a href="{{ route('loan.create', ['borrower_id' => $post->borrower->id]) }}" class="btn btn-sm m-1 bg-gradient-success" style="float: right;">Lend</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row w-100">
                                <div class="progress-wrapper w-100">
                                    <div class="progress-info">
                                        <div class="progress-percentage" style="text-align: right;">
                                            <span class="text-sm font-weight-bold">₱{{ $post->borrower->goal_amount - $post->borrower->amount_received }} left</span>
                                        </div>
                                    </div>
                                    <div class="progress w-100">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                        aria-valuemax="100" style="width: {{ $post->borrower->amount_received / $post->borrower->goal_amount * 100 }}%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                                <p class="card-description">
                                    {!! $post->body !!}
                                </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-0 col-lg-2"></div>
      <div class="col-0 col-lg-4">
        <div class="row w-100" style="position: fixed; max-width: 20rem;">
          <div class="card m-4 w-100">
            <div class="card-header">
              <div class="d-flex flex-row">
                  <img src="{{asset('storage/' . auth()->user()->picture_url) }}"
                    class="img-thumbnail" width="80pt">
                <div class="flex-column ml-3" style="margin-left: 10pt;">
                  <h4 class="ml-3 card-title flex-column">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</h4>
                  <span class="badge badge-circle bg-gradient-success">Lender</span>
                </div>
              </div>
              </div>
              <div class="card-body">
                  <p class="color-secondary text-sm text-uppercase m-0">Total Amount Lent</p>
                  <p class="h1 font-weight-bold text-gradient text-success">₱ {{auth()->user()->lender->amount_lended}}</p>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </div>
    </div>
</x-app-layout>
