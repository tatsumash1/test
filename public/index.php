<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Todoist</title>
</head>
<body>
    <section class = "content">
        <header>
        <span class = "icon">📝</span>
        <h1>Todoist</h1>
        </header>
        <main>
            <article class = "todo">
                <label>
                    <input type="checkbox" checked>
                    My todo 1
                </label>
            </article>
            <article class = "todo">
                <label>
                    <input type="checkbox" checked>
                    My todo 2
                </label>
            </article>

            <form action="/" method="post" class = "add-todo">
                <input type="text" placeholder="What to do?">
                <button type="submit">Add</button>
            </form>
        </main>
        <footer>
            &copy; 2024 myproject
        </footer>
    </section>
</body>
</html>