<form id="checkout-address" wire:submit.prevent="" class="list-view product-checkout" >
    <!-- Checkout Customer Address Left starts -->
    <div class="card">
        <div class="card-header flex-column align-items-start">
            <h4 class="card-title">Guest User Details</h4>
            <p class="card-text text-muted mt-25">Be sure to check "Deliver to this address" when you have finished</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="mb-2">
                        <label class="form-label" cfor="checkout-name">Full Name:</label>
                        <input wire:model="fullName" type="text" id="checkout-name" class="form-control" name="fname" placeholder="John Doe" />
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="mb-2">
                        <label class="form-label" cfor="checkout-email">Email Address:</label>
                        <input
                            type="email"
                            id="checkout-email"
                            class="form-control"
                            wire:model="email"
                            placeholder="0123456789"
                        />
                    </div>
                </div>

                <div class="col-12">
                    <button type="button" wire:click.prevent="saveGuestUser" class="btn btn-primary btn-next delivery-address">Save And Deliver Here</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Customer Address Left ends -->

    <!-- Checkout Customer Address Right starts -->
    <div class="customer-card">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">John Doe</h4>
            </div>
            <div class="card-body actions">
                <p class="card-text mb-0">9447 Glen Eagles Drive</p>
                <p class="card-text">Lewis Center, OH 43035</p>
                <p class="card-text">UTC-5: Eastern Standard Time (EST)</p>
                <p class="card-text">202-555-0140</p>
                <button type="button" class="btn btn-primary w-100 btn-next delivery-address mt-2">
                    Deliver To This Address
                </button>
            </div>
        </div>
    </div>
    <!-- Checkout Customer Address Right ends -->
</form>
