<style>
    .icon {
        width: 30px;
        height: 30px;
    }

    #addIcon {
        width: 120px;
        height: 120px;
        position: fixed;
        bottom: 20px;
        right: 20px;
    }
</style>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 40%;
        border-radius: 5px;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    img {
        border-radius: 5px 5px 0 0;
    }

    .container {
        padding: 2px 16px;
    }
</style>

<?php foreach ($customers as $key => $customer) : ?>
    <div class="card" style="width: 30%; float:left; margin:1%">
        <img src="./icon/avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
            <h4><b><?php echo $customer->name ?></b></h4>
            <p><?php echo $customer->age ?></p>
            <p><?php echo $customer->email ?></p>
            <p><?php echo $customer->address ?></p>
            <p><?php echo $customer->phoneNumber ?></p>
        </div>
    </div>
<?php endforeach; ?>