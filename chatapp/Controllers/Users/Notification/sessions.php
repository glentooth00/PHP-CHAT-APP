<style>
.alert{
    /* background-color:red; */
    color:red;
    padding:5px;
    border: 3px solid rgb(3, 150, 47);
}
</style>


<!-- No username -->
<?php if(isset($_SESSION['no-username'])):?>
    <center>
        <div class="alert">
             <h4><?= $_SESSION['no-username'] ?>*</h4>
             <?php unset($_SESSION['no-username']); ?>
             
        </div> 
     </center>
<?php endif; ?>  


<!-- NO password -->
<?php if(isset($_SESSION['no-password'])):?>
    <center>
        <div class="alert">
             <h4><?= $_SESSION['no-password'] ?>*</h4>
             <?php unset($_SESSION['no-password']); ?>
        </div> 
     </center>
<?php endif; ?>  

<!-- no firstname -->
<?php if(isset($_SESSION['no-firstname'])):?>
    <center>
        <div class="alert">
             <h4><?= $_SESSION['no-firstname'] ?>*</h4>
             <?php unset($_SESSION['no-firstname']); ?>
        </div> 
     </center>
<?php endif; ?>  

<!-- no lastname -->
<?php if(isset($_SESSION['no-lastname'])):?>
    <center>
        <div class="alert">
             <h4><?= $_SESSION['no-lastname'] ?>*</h4>
             <?php unset($_SESSION['no-lastname']); ?>
        </div> 
     </center>
<?php endif; ?>  

<!-- no gender -->
<?php if(isset($_SESSION['no-gender'])):?>
    <center>
        <div class="alert">
             <h4><?= $_SESSION['no-gender'] ?>*</h4>
             <?php unset($_SESSION['no-gender']); ?>
        </div> 
     </center>
<?php endif; ?>  