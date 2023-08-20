<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discussion Forum</title>
    <meta name="author" content="Codeconvey" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/discussionForum/discussionForum.css">

  

</head>

<body>


@include('Home.navBar');

    <div class="ScriptTop">
        <div class="rt-container">
            <div class="col-rt-4" id="float-right">
                <!-- AD -->
            </div>
            <div class="col-rt-2">

            </div>
        </div>
    </div>

<br>

    <header class="ScriptHeader">
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="rt-heading">
                    <h1>A Discussion Form</h1>
                    <p>Post Your Queries, Discuss with Others Community Members, Get Answers and Remove any Confusion. </p>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">

                    <!-- partial:index.partial.html -->
                    <section id="app">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="comment">
                                        <p v-for="items in item" v-text="items"></p>
                                    </div>
                                    <!--End Comment-->
                                </div>
                                <!--End col -->
                            </div><!-- End row -->
                            <div class="row">
                                <div class="col-12">
                                    <textarea type="text" class="input" placeholder="Write a comment" v-model="newItem"
                                        @keyup.enter="addItem()"></textarea>
                                    <button v-on:click="addItem()" class='primaryContained float-left'
                                        type="submit">Post Query</button>
                                </div><!-- End col -->
                            </div>
                            <!--End Row -->
                        </div>
                        <!--End Container -->
                    </section><!-- end App -->
                    <!-- partial -->
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
                    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
                   
                      <!-- external js file -->
                    <script  src="js/discussionForum/discussionForum.js"></script>

                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>