<?php include 'inc/header.php' ?>

<?php 

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn,$sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);



// $feedback = [
//   [
//     'id' => '1',
//     'name' => 'Beth Williams',
//     'email' => 'beth@nbc.com',
//     'body' => 'NBC is terrible!',
//   ],
//   [
//     'id' => '2',
//     'name' => 'Jim Halpert',
//     'email' => 'jim@dundermifflin.com',
//     'body' => 'Michael G. SCott is great',
//   ],
//   [
//     'id' => '3',
//     'name' => 'Dwight K. Shrute',
//     'email' => 'dwight@dundermifflin.com',
//     'body' => 'The security here is a joke.',
//   ]
// ];

?>

        <h2>Past Feedback</h2>

        <?php if(empty($feedback)): ?>
          <p class="lead mt-3">There's no feedback</p>
        <?php endif; ?>

        <?php foreach($feedback as $item): ?>
          <div class="card my-3 w-75" data-id="<?php echo $item['id'] ?>">
            <div class="card-body text-center">
              <?php echo $item['body'] ?>
              <div class="text-secondary mt-2">
                By <?php echo $item['name'] ?> on <?php echo $item['date'] ?>
              </div>
              <button type="button" class="btn btn-danger mt-2">Delete</button>
            </div>
          </div>
        <?php endforeach; ?>
<!-- 
        <div class="card my-3">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
            molestias animi earum eos dolorem repellat a quibusdam, aperiam vero
            repellendus voluptatibus natus deserunt sed doloribus inventore,
            totam labore maxime perferendis!
          </div>
        </div>

        <div class="card my-3">
          <div class="card-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta
            molestias animi earum eos dolorem repellat a quibusdam, aperiam vero
            repellendus voluptatibus natus deserunt sed doloribus inventore,
            totam labore maxime perferendis!
          </div>
        </div> 
-->

<?php include 'inc/footer.php' ?>
