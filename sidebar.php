<?php 
include 'db.php';

$query = mysqli_query($conn,"SELECT * FROM school_year where status='Yes' ");
$s = mysqli_fetch_assoc($query);
$school_year=$s['school_year'];
?>




 <ul class="nav navbar-nav side-nav">
 <li>
<a href="rms.php?page=home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
</li>
<li>
<a id=demo1 href="javascript:void(0)" data-toggle="collapse" data-target="#masterlistCollapse"><i class="fa fa-fw fa-files-o"></i> Assets & Properties <i class="fa fa-fw fa-caret-down"></i></a>
<ul id="masterlistCollapse" class="collapse">
    <li>
        <a href="rms.php?page=Lists"><i class="fa fa-fw fa-users"></i> Equipments and Properties</a>
    </li>
    <li class="">
        <a href="rms.php?page=subjects"><i class="fa fa-fw fa-book"></i> Property/Material Requisition</a>
    </li>
    <li class="">
        <a href="rms.php?page=program"><i class="fa fa-fw fa-bars"></i>  Type of Property</a>
    </li>
</ul>
</li>
<li>
    <a href="javascript:void(0)" data-toggle="collapse" data-target="#reportsCollapse"><i class="fa fa-fw fa-file"></i> Reports       <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="reportsCollapse" class="collapse">
        <li>
            <a href="rms.php?page=report"><i class="fa fa-fw fa-files-o"></i> Requisition Details </a>
        </li>
    </ul>
</li>
<li>
    <a href="rms.php?page=users"><i class="fa fa-users"></i> Users</a>
</li>
<li>
    <a href="javascript:void(0)" data-toggle="collapse" data-target="#maintenanceCollapse"><i class="fa fa-fw fa-gears"></i> Maintenance  <i class="fa fa-fw fa-caret-down"></i></a>
    <ul id="maintenanceCollapse" class="collapse">
        <li>
            <a href="rms.php?page=school_year&info=backup"><i class="fa fa-fw fa-database"></i> Backup </a>
        </li>
        <li>
            <a href="rms.php?page=school_year2&info=restore"><i class="fa fa-fw fa-refresh"></i> Restore </a>
        </li>
    </ul>
</li>

</ul>
<script>
    $('.side-nav li a').each(function(){
        if((location.href).includes($(this).attr('href')) == true){
            $(this).closest('li').addClass("active")
            console.log($(this).closest('li').parent('ul').attr('id'))
            if($(this).closest('li').parent('ul').hasClass('collapse') == true){
                $('[data-target="#'+$(this).closest('li').parent('ul').attr('id')+'"]').click()
            }
        }
    })
</script>

                