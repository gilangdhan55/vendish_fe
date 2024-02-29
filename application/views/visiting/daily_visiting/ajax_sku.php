<script>
    $('#tableSKU').DataTable({
        "language": {                
            "infoFiltered": "",
            "loadingRecords": "WAIT...",
        },
        "responsive": true,
        "processing": false,
        "serverSide": true,
        "lengthChange": true,
        "ordering": true,
        "searching": true,
        "autoWidth": false,
        "info": true,  
        "order": [],
        "serverSide": true,
        "ajax": {
            "url": "http://localhost/vendish/Visiting/all_sku",
            "type": "post"
        },

        "columnDefs": [ 
            {
                "targets": [0], 
                "orderable": false,
                "className":"text-center choose-sku-td",
            }, 
        ], 
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ], 
        "drawCallback": function(settings) {
            var api = this.api(); 
            
            if (checkboxValuesSKU) {
                api.rows().nodes().each(function(row) {
                    let checkbox = $(row).find('.checked-sku');
                    let sku = checkbox.data('sku');

                    // Check if the sku exists in the checkboxValues array
                    if ($.inArray(sku, checkboxValuesSKU) !== -1) {
                        checkbox.prop('checked', true);
                        $(row).addClass('selected')
                    } else {
                        checkbox.prop('checked', false);
                        $(row).removeClass('selected')
                    }
                });
            }
        },
        createdRow: function (row, data, dataIndex) {
            $(row).addClass('td-choose-sku');
        },
            
    });  

    
    $(document).on('click', '.td-choose-sku', function(){
       
        var input = $(this).find('td .checked-sku');
        var sku  = input.data('sku');
        input.prop('checked', !input.prop('checked')) 

        if(input.prop('checked')){
            if (checkboxValuesSKU.indexOf(sku) === -1) {
                checkboxValuesSKU.push(sku);
            } 
            $(this).addClass('selected')
        }else{
            $(this).removeClass('selected')
            checkboxValuesSKU = $.grep(checkboxValuesSKU, function(value) {
                return value !== sku;
            });
        }
    })


    $(document).on('click', '#chooseSKUButton', function(){
        var skuCode = getSKUCode();
          
        $('#skuInput').val(skuCode.join(', '))

        $('#modal-sku').modal('hide')
    });


    function getSKUCode() {
         
        $('.checked-sku').each(function() { 
            var sku                = $(this).data('sku');
            var tr                  = $(this).closest('tr');
            if($(this).prop('checked')){
                if (checkboxValuesSKU.indexOf(sku) === -1) {
                    checkboxValuesSKU.push(sku);
                } 
            }else{
                checkboxValuesSKU = $.grep(checkboxValuesSKU, function(value) {
                    return value !== sku;
                });
            }
        });  

        return checkboxValuesSKU;
    }

     
</script>