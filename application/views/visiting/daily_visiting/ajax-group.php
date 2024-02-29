<script>
    $('#tableGroup').DataTable({
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
            "url": "http://localhost/vendish/Visiting/all_group_ajax",
            "type": "post"
        },

        "columnDefs": [ 
            {
                "targets": [0], 
                "orderable": false,
                "className":"text-center choose-td-group",
            }, 
        ], 
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ], 
        "drawCallback": function(settings) {
            var api = this.api(); 
            
            if (checkboxValuesGroup) {
                api.rows().nodes().each(function(row) {
                    let checkbox = $(row).find('.checked-group');
                    let group = checkbox.data('group');

                    // Check if the group exists in the checkboxValuesGroup array
                    if ($.inArray(group, checkboxValuesGroup) !== -1) {
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
            $(row).addClass('td-choose-group');
        },
            
    });  

    
    $(document).on('click', '.td-choose-group', function(){
       
        var input = $(this).find('td .checked-group');
        var group  = input.data('group');
        input.prop('checked', !input.prop('checked')) 

        if(input.prop('checked')){
            if (checkboxValuesGroup.indexOf(group) === -1) {
                checkboxValuesGroup.push(group);
            } 
            $(this).addClass('selected')
        }else{
            $(this).removeClass('selected')
            checkboxValuesGroup = $.grep(checkboxValuesGroup, function(value) {
                return value !== group;
            });
        }
    })


    $(document).on('click', '#chooseGroupButton', function(){
        var groupCode = getCodeGroup();
          
        $('#inputGroupCust').val(groupCode.join(', '))

        $('#modal-groupCust').modal('hide')
    });


    function getCodeGroup() {
         
        $('.checked-group').each(function() { 
            var group               = $(this).data('group');
            var tr                  = $(this).closest('tr');
            if($(this).prop('checked')){
                if (checkboxValuesGroup.indexOf(group) === -1) {
                    checkboxValuesGroup.push(group);
                } 
            }else{
                checkboxValuesGroup = $.grep(checkboxValuesGroup, function(value) {
                    return value !== group;
                });
            }
        });  

        return checkboxValuesGroup;
    }

     
</script>