jQuery(document).ready(function($){
    $(document).on("change", "select.orders_change", function(){   
        
        var status = $(this).val();
        var orderid = $(this).data('id');
        
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