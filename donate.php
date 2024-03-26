<?php require_once("config.php") ?>
<style>
    #uni_modal .modal-content > .modal-footer {
        display: none !important;
    }
    #uni_modal .modal-content > .modal-body {
        padding: unset !important;
    }
</style>

<div class="container-fluid py-2 px-3">
    <p>Your donation will be much appreciated and can help others. Thank you!</p>
    <div class="form-group">
        <center><small>Enter Your Name</small></center>
        <input type="text" id="name" class="form-control form-control-lg text-left">
        <center><small>Enter Donation Amount Here</small></center>
        <input type="number" step="2" min="0" id="amount" class="form-control form-control-lg text-right">
    </div>
    <div class="form-group">
        <center>
            <span id="paypal-button"></span><br>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </center>
    </div>
</div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
$(function() {
    paypal.Button.render({
        env: 'sandbox', // Change this to 'production' when your app is live
        client: {
            sandbox: 'ASiiIXcI9lxTDxpdzMXiKxSgV5wG2K8vavdZU-1rMITrar9ZoU16NFfkuJXY6OR1U2_JSPsUtZLFzfYV',
            production: 'AQs8U46IdhZcx8XAiY4KvwQVN0k0k10htaypd2h3ZkbZnGOyBVMG-eTx7PLREHApn8ZJOfG0a0ydxuwr' // Add your production client ID here
        },
        commit: true,
        style: {
            color: 'blue',
            size: 'medium'
        },
        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [{
                        amount: {
                            total: $('#amount').val(),
                            currency: 'PHP'
                        }
                    }]
                }
            });
        },
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(payment) {
                donation_success();
            });
        }
    }, '#paypal-button');

    function donation_success() {
        start_loader();

        var donorName = $('#name').val();

        $.ajax({
            url: "classes/Master.php?f=save_donation",
            method: "POST",
            data: {
                amount: $('#amount').val(),
                name: donorName
            },
            dataType: "json",
            error: err => {
                console.log(err);
                alert_toast("PayPal Process Was successful but failed to record the amount into the database");
                end_loader();
            },
            success: function (resp) {
                if (resp.status == 'success') {
                    location.reload();
                } else {
                    console.log(resp);
                    alert_toast("PayPal Process Was successful but failed to record the amount into the database");
                }
                end_loader();
            }
        });
    }
});
</script>
