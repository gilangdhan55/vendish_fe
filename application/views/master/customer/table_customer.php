<table class="table align-midle mb-0" id="listing_customer_table">
    <thead class="table-light">
        <tr> 
            <th>No</th>
            <th >Code Customer</th>
            <th >customer nama</th>
            <th >Alamat Customer</th>
            <th >Group</th>
            <th >Total Must-Check</th>
            <th >Total Medium</th>
            <th >Total Low</th>
            <th >SubTotal</th>
            <th >Detail</th>
        </tr>
    </thead>
    <tbody> 
        <?php if($customer) {
            $no = 1;    
        ?>
            <?php foreach ($customer as $data) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data->code_customer ?></td>
                        <td><?= $data->name_customer ?></td>
                        <td><?= $data->address_customer ?></td>
                        <td><?= $data->group_name ?></td>
                        <td><?= $data->count_must_check ?></td>
                        <td><?= $data->count_medium ?></td>
                        <td><?= $data->count_low ?></td>
                        <td><?= $data->count_group ?></td>
                        <td><button class="btn btn-primary">Detail</button></td>
                    </tr>
                <?php
                # code...
            } ?>
        <?php } ?>
    </tbody>
</table>
                  
<script>
     $('#listing_customer_table').DataTable({
        "language": {
            "emptyTable": "Tidak ada data yang tersedia"
        }
    })
</script>