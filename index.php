<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Loan Calculator</h1>
</header>

<div class="main-container">
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="get">
        <label for="amount">Type your desired amount</label>
        <div class="input-container">
            <input type="number" name="amount">
            <input type="submit" value="COMPUTE" class="btn" name="submit">
        </div>

        <div class="table-container">
            <h2>Your estimated monthly installments are as follows</h2>

            <div class="loan-table">
                <div class="loan-table-header">
                    <div class="row1">
                        <div class="amount-title">Loan Amount</div>
                        <div class="amount-value">100,000</div>
                    </div>
                    <div class="row2">Term</div>
                    <div class="row2">Monthly Installment</div>
                </div>

                <div class="loan-table-body">
                    <div class="loan-table-term">
                        <div>12</div>
                        <div>18</div>
                        <div>24</div>
                    </div>
                    <div class="loan-table-installments">
                        <div>9000</div>
                        <div>6000</div>
                        <div>5000</div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="footer">
            <div class="notice">
                This is computed at monthly add-on rate of 1.2%
            </div>
            <input type="submit" class="btn btn-center" value="Apply Now" name="apply">
        </div>
    </form>
</div>
    
</body>
</html>