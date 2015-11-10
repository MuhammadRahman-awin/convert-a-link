<?php
if (! empty($_POST['publisherId'])) {
    delete_option('cal_publisherId');
    add_option('cal_publisherId', $_POST['publisherId']);
}
?>
<div class="wrap" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
     xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <h2>Configure your Convert-a-link settings </h2>
    <table>
        <tr>
            <td>
                <b>Step 1: Turn on Convert-a-link option in your Affiliate Window setting page</b>
                <br/>
                <i>under 'Links and Tools' menu</i>
            </td>
            <td><a target="_blank" href="https://darwin.affiliatewindow.com/awin/affiliate/45628/convert-a-link"><img src=<?=plugins_url("convert-a-link/one.png")?>></a></td>
        </tr>
        <tr>
            <td><b>Step 2: Enter your publisherId and save.</b></td>
            <td>
                <form enctype="multipart/form-data" name="convert-a-link" method="post" action="">
                <input type="number" value="<?=get_option('cal_publisherId')?>" name="publisherId"/>
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Save">
                </form>
            </td>
        </tr>
    </table>
</div>
