<x-app-layout>
    <x-header :bottom="100"/>
    <div class="container">
        <div class=" text-center mt-8">
    
          <h1>Create Loan</h1>
    
    
        </div>
    
    
        <div class="row ">
          <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
              <div class="card-body bg-light">
    
                <div class="container">
                    <form method="POST" action="{{ route('loan.store') }}">
                        @csrf
                        <input type="hidden" name="borrower_id" value="{{ $borrower->id }}">
                        <input type="hidden" name="lender_id" value="{{ auth()->user()->lender->id }}">
                        <div class="mb-4">
                        <label for="form_amount" class="block">Amount to Lend:</label>
                        <input min="0" id="amount_loaned" name="amount_loaned" type="amount" name="amount" class="form-control"
                            placeholder="Please enter your amount *" required="required"
                            data-error="Valid amount is required.">
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                                      " value="Create Loan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    </div>


</x-app-layout>