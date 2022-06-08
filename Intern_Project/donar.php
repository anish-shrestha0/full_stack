<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Donar Form</title>
</head>

<body>
    <div class="background">
        <h1>Donation Form</h1>
        <div class="small">
            <h2>Please fill the following form</h2>
        </div>
        <div class="card">
            <form action="#" class="table">
                <fieldset>
                    <legend>Personal Information</legend>
                    <div class="info">Full Name:*</div>
                    <input type="text" name="full-name" placeholder="First Name" id="fname" required>
                    <input type="text" name="full-name" placeholder="Last Name" id="lname" required>
                    <div class="info">EMAIL:*</div>
                    <input type="email" name="email" placeholder="e.g @gmail.com" class="input-responsive" required>
                    <div class="info">Phone No:*</div>
                    <input name="mobile" id="mobile" type="number" class="input-responsive" required>
                    <div class="info">Address:*</div>
                    <textarea name="address" id="address" cols="8" rows="2" class="input-responsive" required></textarea>
                </fieldset>
                <br> <br>
                <div class="form-bottom">
                    <label for="donor-select">Choose an Option:</label>
                    <select name="donorss" id="donar-select">
                <option value="">--Please choose Type of Donation</option>
                <option value="seed">Seed</option>
                <option value="plant">Plant</option>
                <option value="cash">Money/Cash</option>
            </select>
                    <br> <br>
                    <div class="amt">Amount/Name:*</div>
                    <input type="text" name="number" id="amt" required>
                    <br> <br>
                    <div class="comment"></div>
                    <textarea name="comment" id="comment" cols="30" rows="4" placeholder="comment"></textarea>
                    <br>
                    <input type="submit" class="btn-1" value="Donate">
                </div>
            </form>


        </div>
        <div class="moto">
            <div class="bottom">
                <img src="/donations1-logo.png" alt="">
                <h2>Give Donations</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam incidunt minus id illo nihil fuga eos! Vitae error totam optio voluptates quod enim in tempore eaque necessitatibus! Ipsa fugiat reprehenderit dolores eos modi ipsum non
                    quam ex sint libero perferendis maxime aut, accusamus amet autem eius voluptates! Veniam fuga, possimus dignissimos voluptatem at aspernatur atque!</p>
            </div>
            <div class="bottom1">
                <img src="/bulb-lamp.png" alt="">
                <h2>Give Inspiration</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam incidunt minus id illo nihil fuga eos! Vitae error totam optio voluptates quod enim in tempore eaque necessitatibus! Ipsa fugiat reprehenderit dolores eos modi ipsum non
                    quam ex sint libero perferendis maxime aut, accusamus amet autem eius voluptates! Veniam fuga, possimus dignissimos voluptatem at aspernatur atque!</p>
            </div>
            <div class="bottom2">
                <img src="/volunteer-logo.png" alt="">
                <h2>Become Volunteer</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam incidunt minus id illo nihil fuga eos! Vitae error totam optio voluptates quod enim in tempore eaque necessitatibus! Ipsa fugiat reprehenderit dolores eos modi ipsum non
                    quam ex sint libero perferendis maxime aut, accusamus amet autem eius voluptates! Veniam fuga, possimus dignissimos voluptatem at aspernatur atque!</p>
            </div>
        </div>

    </div>


</body>

</html>