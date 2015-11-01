<?php 

/* Template Name: creationkit*/

 ?>
<?php get_header('form') ?>
<?php 


if (isset($_POST['submit'])) {
	$name = htmlspecialchars($_POST['myname']);
	$email = sanitize_email($_POST['myemail']);
	$situation = wp_kses_post($_POST['mysituation']);
	$title_situation = $_POST['title_situation'];



	$contact_post = array(
		'post_title' => $name,
		'post_content' => $situation,
		'post_type' => 'createkit',
		'post_status' => 'publish',
		


	);


	$post_id = wp_insert_post( $contact_post);


	// if(wp_insert_post($contact_post)) echo 'votre kit a été enregistré ';
	// else echo 'erreur lors de envoie';

	update_field("field_5633f0cdacbef", $title_situation, $post_id);
	update_field("field_5635443153111", $email, $post_id);




}else{

}


 ?>

<div class="split-container">
   <div class="split-item split-right">
      <h3>Ajoutez votre situation de survivant</h3>
      <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est enim quas expedita, consequuntur ipsam molestias libero quo magni reprehenderit nobis officiis accusantium corporis voluptatibus et tempore saepe voluptas. Impedit, possimus.
      </p>
      <a target="_blank" href="">NESNES </a>		
   </div>


   <div class="split-item split-left">
   <h1>Publie ton Aventure</h1>
      
      <div class="form">
         <form action="<?php echo the_permalink(); ?>" method="POST">

            <p><input type="text" name="myname"  placeholder="Nom"></p>
            <p><input type="text" name="myemail" placeholder="Email"></p>
            <p><input type="text" name="mysituation"  placeholder="titre de la situation"></p>
            <p><textarea  name="title_situation" placeholder="Message"></textarea></p>
            <p><input type="submit" name="submit" value="Envoyer"></p>
         </form>
      </div>
   </div>
</div>