<!DOCTYPE html>
<html>
<head>
    <title>Página do artigo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Eu queria criar uma impresa, o que devo fazer?</h1>
    </header>

    <main>
        <article>
            <h2>Como criar uma impresa de sucesso?</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus cum ad sequi molestias libero, quod adipisci vero rerum aliquam inventore cupiditate nemo dicta iste asperiores doloribus illo dignissimos! Praesentium, corporis!
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero adipisci architecto voluptates odio, aspernatur commodi rem labore! Quas eum id, sapiente, a voluptates esse, corporis commodi enim magnam veniam quia.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam amet magnam cum, fugit eum maiores quidem porro odit mollitia ipsa voluptatum laudantium ut quae. Labore laboriosam assumenda quod architecto quia.
            </p>
        </article>

        <section id="comentarios">
            <h2>Comentários</h2>
            
        </section>

        <section id="comentarios-form">
            <h2>Deixe seu comentário</h2>
            <form action="post_comment.php" method="POST">
                <label for="name">Nome:</label>
                <input type="text" name="name" required><br>
                <label for="comment">Comentário:</label>
                <textarea name="comment" rows="4" required></textarea><br>
                <input type="submit" value="Submit">
            </form>
        </section>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> My Blog
    </footer>
</body>
</html>
