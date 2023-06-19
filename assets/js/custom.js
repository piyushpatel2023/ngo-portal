jQuery(document).ready(function($){
            
    $('select.orders_change').on('change',function(e) {
        alert('asdf');
        var status = $("option:selected", this);
        var orderid = $(this).data('id');
        console.log('570'+status);
        console.log('571'+orderid);
        const apiUrl = 'https://55i53iuqk9.execute-api.ap-south-1.amazonaws.com/prod/orders'; // Replace with your API endpoint

        const updatedData = {
            orderId: orderid,
            status: status
        };

        fetch(apiUrl, {
        method: 'PATCH',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(updatedData)
        })
        .then(response => response.json())
        .then(data => {
            // Handle the API response or perform any additional actions
            console.log(data);
        })
        .catch(error => {
            // Handle error if the API request fails
            console.error(error);
        });
        setTimeout(function(){location.reload(); }, 2000);
    });
});