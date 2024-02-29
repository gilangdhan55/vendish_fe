<script>
    $('#tableBrand').DataTable({
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
            "url": "http://localhost/vendish/Visiting/all_brand",
            "type": "post"
        },

        "columnDefs": [ 
            {
                "targets": [0], 
                "orderable": false,
                "className":"text-center choose-td",
            }, 
        ], 
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ], 
        "drawCallback": function(settings) {
            var api = this.api(); 
            
            if (checkboxValues) {
                api.rows().nodes().each(function(row) {
                    let checkbox = $(row).find('.checked-brand');
                    let brand = checkbox.data('brand');

                    // Check if the brand exists in the checkboxValues array
                    if ($.inArray(brand, checkboxValues) !== -1) {
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
            $(row).addClass('td-choose-brand');
        },
            
    });  

    
    $(document).on('click', '.td-choose-brand', function(){
       
        var input = $(this).find('td .checked-brand');
        var brand  = input.data('brand');
        input.prop('checked', !input.prop('checked')) 

        if(input.prop('checked')){
            if (checkboxValues.indexOf(brand) === -1) {
                checkboxValues.push(brand);
            } 
            $(this).addClass('selected')
        }else{
            $(this).removeClass('selected')
            checkboxValues = $.grep(checkboxValues, function(value) {
                return value !== brand;
            });
        }
    })


    $(document).on('click', '#chooseBrandButton', function(){
        var brandCode = getCodeBrand();
          
        $('#brandinput').val(brandCode.join(', '))

        $('#modal-brand').modal('hide')
    });


    function getCodeBrand() {
         
        $('.checked-brand').each(function() { 
            var brand                = $(this).data('brand');
            var tr                  = $(this).closest('tr');
            if($(this).prop('checked')){
                if (checkboxValues.indexOf(brand) === -1) {
                    checkboxValues.push(brand);
                } 
            }else{
                checkboxValues = $.grep(checkboxValues, function(value) {
                    return value !== brand;
                });
            }
        });  

        return checkboxValues;
    }

     
</script>