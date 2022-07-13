<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Sheet Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.1-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</head>

<main>
    <section id="page">
        <div class="p-5 mt-5">
            <p class="mt-5">Please indicate subtraction by adding "-" before the number. Addition is default. </p>
            <form>
                Purchase Price<br><input type="text" name="purchasePrice" placeholder="0" /><br>
                1st Mortgage Payoff<br><input type="text" name="firstMortPayoff" placeholder="0" /><br>
                2nd Mortgage Payoff<br><input type="text" name="secondMortPayoff" placeholder="0" /><br>
                Listing Brokerage Commission<br><input type="text" name="listBrokeComm" placeholder="0" /><br>
                Selling Brokerage Commission<br><input type="text" name="sellBrokeComm" placeholder="0" /><br>
                1/2 Closing Fee<br><input type="text" name="halfClosing" placeholder="0" /><br>
                Standard Owners Policy<br><input type="text" name="ownersPolicy" placeholder="0" /><br>
                Courier Fee<br><input type="text" name="courierFee" placeholder="0" /><br>
                Reconveyance Fee $80 per payoff<br><input type="text" name="reconFee" placeholder="0" /><br>
                Wire Fee<br><input type="text" name="wireFee" placeholder="0" /><br>
                Prorated Taxes Current Year<br><input type="text" name="proTax" placeholder="0" /><br>
                1/2 Taxes Prior Year<br><input type="text" name="halfTax" placeholder="0" /><br>
                Estimated Assessments<br><input type="text" name="estAssess" placeholder="0" /><br>
                Recording Fees<br><input type="text" name="recFees" placeholder="0" /><br>
                HOA Dues - Prepaid<br><input type="text" name="hoaDues" placeholder="0" /><br>
                Miscellaneous Fees<br><input type="text" name="misc" placeholder="0" /><br>
                Seller Credits<br><input type="text" name="sellCreds" placeholder="0" /><br>
                Day of the year<br><input type="text" name="dayOfYear" placeholder="0" /><br>
                Days in a Year<br><input type="text" value="365" name="dayOfYear" /><br>
                Daily Tax Per Diem<br><input type="text" name="dayTaxDiem" placeholder="0"><br>
                Daily Tax Per Diem<br><input type="text" name="proTax2" placeholder="0"><br>
                Listing Commison %<br><input type="text" name="listComm" placeholder="0"><br>
                Selling Commison %<br><input type="text" name="sellComm" placeholder="0"><br>
                Estimated Annual Taxes<br><input type="text" name="estTax" placeholder="0"><br>
                <button type="submit" name="submit" value="submit">Calculate</button>
            </form>
            <button><a class="text-black" style="text-decoration: none;" href="/calculator-page">Reset Calculator</a></button><br>
            <?php
            if (isset($_GET['submit'])) {
                $var1 = $_GET['purchasePrice'];
                $var2 = $_GET['firstMortPayoff'];
                $var3 = $_GET['secondMortPayoff'];
                $var4 = $_GET['listBrokeComm'];
                $var5 = $_GET['sellBrokeComm'];
                $var6 = $_GET['halfClosing'];
                $var7 = $_GET['ownersPolicy'];
                $var8 = $_GET['courierFee'];
                $var9 = $_GET['reconFee'];
                $var10 = $_GET['wireFee'];
                $var11 = $_GET['proTax'];
                $var12 = $_GET['halfTax'];
                $var13 = $_GET['estAssess'];
                $var14 = $_GET['recFees'];
                $var15 = $_GET['hoaDues'];
                $var16 = $_GET['misc'];
                $var17 = $_GET['sellCreds'];
                $var18 = $_GET['dayOfYear'];
                $var19 = $_GET['dayTaxDiem'];
                $var20 = $_GET['listComm'];
                $var21 = $_GET['sellComm'];
                $var22 = $_GET['estTax'];
            };
            $a = array("a" => $var1, "b" => $var2, "c" => $var3, "d" => $var4, "e" => $var5, "f" => $var6, "g" => $var8, "h" => $var9, "i" => $var10, "j" => $var11, "k" => $var12, "l" => $var13, "m" => $var14, "n" => $var15, "o" => $var16, "p" => $var17); ?>
            Estimated Net Proceeds:
            <?php echo array_sum($a); ?>
            <br>
            Listing Commission:
            <?php echo ($var1 * ($var20 * 0.01)); ?>
            <br>
            Selling Commission:
            <?php echo ($var1 * ($var21 * 0.01)); ?>
        </div>
    </section>
</main>

</html>