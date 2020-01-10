$(document).ready(function() {

    $('.form-converter').on('submit', function (e) {
        e.preventDefault();

        var form = $(this);
        var currencies_list = $('.currencies-list');

        currencies_list.html('');

        $.ajax({
            method: "POST",
            url: form.attr('action'),
            dataType: 'json',
            data: {
                amount: form.find('input[name=amount]').val()
            }
        }).done(function( response ) {
           if(response.status && response.data) {
               for (i in response.data) {
                   currencies_list.append(
                       `
                        <div class="col s2">
                            <div class="card blue-grey darken-1">
                                <div class="card-content white-text">
                                    <span class="card-title">`+ response.data[i] +`</span>
                                    <p>`+ i +`</p>
                                </div>
                            </div>
                        </div>
                       `
                   );
               }
           }
        });
    });

});