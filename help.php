<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
    <title>Shtem</title>
</head>

<body>
    <div class="ui grid container" style="margin-top:1em">
        <div class="row">
            <h1 class="ui dividing header">Shtem</h1>
        </div>
        <div class="row">
            <div class="ui two column divided stackable grid">
                <div class="row container">
                    <div class="column">
                        <h3 class="ui header">What is Shtem?</h3>
                        <p>Shtem is a PHP based application which serves its function as a "short term memory".
                            It means that Shtem will be accepting a "memory" input in form of HTTP request and then
                            saves it
                            inside the server for a short period of time.
                        </p>
                        <h3 class="ui header">What are the intended use cases?</h3>
                        <p>There is actually no "intended" use case. Shtem could be used in a variety of functions.
                            For
                            example,
                            Shtem could be used when performing a RCE exploitation where the output must be
                            reflected to
                            a
                            remote server. It is very useful when you don't have a server connected to the internet.
                        </p>
                    </div>

                    <div class="column">
                        <h3 class="ui header">API Documentation</h3>
                        <table class="ui definition table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Method</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>/<code>&lt;mname&gt;</code></td>
                                    <td><span class="ui label">GET/POST</span></td>
                                    <td>Stores a memory item named <code>&lt;mname&gt;</code>. <code>&lt;mname&gt;</code> is optional (defaults to IP address).</td>
                                </tr>
                                <tr>
                                    <td>/get/<code>&lt;mname&gt;</code></td>
                                    <td><span class="ui label">GET</span></td>
                                    <td>Get a specific memory item named <code>&lt;mname&gt;</code>.</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>More details are available in the <code>README.md</code> file <a href="https://github.com/ttycelery/shtem">here</a>.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>