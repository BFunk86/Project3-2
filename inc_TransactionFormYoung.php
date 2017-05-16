<form action="CalculateChangeYoung.php" method="post" class="form-horizontal">
    <fieldset>
        <legend>Enter a Transaction</legend>
    </fieldset>
    <div class="form-group">
        <label for="owed" class="col-sm-4 control-label">Amount Owed: $</label>
        <div class="col-xs-6">
            <input type='text' name='owed' id='owed' class='form-control'>
        </div><!-- .col-xs-10 -->
    </div><!-- .form-group -->
    <div class='form-group'>
        <label for='paid' class='col-sm-4 control-label'>Amount Paid: $</label>
        <div class='col-xs-6'>
            <input type='text' name='paid' id='paid' class='form-control'>
        </div><!-- .col-xs-10 -->
    </div><!-- .form-group -->
    <div class='form-group'>
        <button class='btn' name='submit' type='submit' value='submit'>Calculate Change</button>
        <button class='btn' name='reset' type='reset' value='reset'>Clear Form</button>
    </div><!-- .form-group -->
</form>