@extends('user.templates.BasicPortfolio.layouts.main_layout')

    <style>
        div.gallery {
            border: 1px solid #ccc;
        }

        /* div.gallery:hover {
            border: 1px solid #777;
        } */

        div.gallery img {
            width: 100%;
            height: 300px;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 10px 6px;
            float: left;
            width: 33.3333%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }



        input[type=text], input[type=email], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            background-color: #020312;
            }


            input[type=submit] {
            background-color: #B92B0B;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
            }

            .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
            }
            .comment{
                border: 1px solid #ea3509;
                border-radius: 30px;
                padding: 1% 2%;
                margin-bottom: 15px;
            }
    </style>
    @section('body')
    <div class="perker_section" id="" style="margin-top: 5%;">
        <div class="perker_team">
            <div class="container">
                <div class="perker_title_holder">
                    <span class="title">Blog</span>
                    <h3>{{  $data['blog']['title'] ?? "Lorem ipsum text"  }}</h3>
                    <input type="hidden" value="{{  $data['blog']['id'] ?? 0  }}" id="id">
                </div>
                <div class="team_list perker_appear">
                    @foreach ($data['blog_images'] as $key => $images)
                        @if($key == 0)
                        <img src="{{ asset($images) }}" alt="" width="100%" height="600">
                        @else
                        <div class="responsive">
                            <div class="gallery">
                              <a target="_blank" href="{{ asset($images) }}">
                                <img src="{{ asset($images) }}" alt="Mountains" width="600" height="100">
                              </a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <div style="font-size: 18px; margin-top: 5%;">
                        {!! $data['blog']['description'] !!}
                    </div>
                </div>
                <div class="comment-section" style="margin-top: 5%; margin-bottom: 5%;">
                    <h1 style="color: #ea3509;">All comments</h1>
                    <div class="all-comment">
                    @foreach ($data['blog_comments'] as $comment)
                    <div class="comment">
                        <h3>{{ $comment->comment }}</h3>
                        <div style="display: flex; justify-content: space-between">
                            <p>{{ $comment->name }}</p>
                            <p>{{ date('d M, Y', strtotime($comment->created_at)) }}</p>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
                <div class="blog-comment-box" style="padding-top: 5%; padding-bottom: 5%;">
                    <h3 class="mb-40">Leave a comment:</h3>
                    <form action="javascript:comment()">
                        <div class="row">
                          <div class="col-75">
                            <input type="text" id="name" name="name" placeholder="Your name.." required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-75">
                            <input type="email" id="email" name="email" placeholder="Your email" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-75">
                            <textarea id="comment" name="comment" placeholder="Write something.." style="height:200px" required></textarea>
                          </div>
                        </div>
                        <br>
                        <div class="row" style="float: left;">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>

        function comment() {
            var name = jQuery('#name').val();
            var email = jQuery('#email').val();
            var comment = jQuery('#comment').val();
            var id = jQuery('#id').val();
            var time = "{{ date('d M, Y', strtotime('now')) }}";
            $.ajax({
                url: '/comment-db',
                type: 'POST',
                data: { name : name, email : email, comment : comment, _token : "{{csrf_token()}}", rel_id : id },
                success: function(res) {
                    $('.all-comment').prepend(`<div class="comment" id="new-comment-">
                                                <h3>` + comment + `</h3>
                                                <div style="display: flex; justify-content: space-between">
                                                    <p>` + name + `</p>
                                                    <p>` + time + `</p>
                                                </div>
                                            </div>`);
                    $('.blog-comment-box').prepend(`<p style="color: green;"> Comment added </p>`);
                    jQuery('#name').val('');
                    jQuery('#email').val('');
                    jQuery('#comment').val('');
                    $('html, body').animate({
                        scrollTop: $("#new-comment").offset().top
                    }, 1000);
                },
                error: function(){
                    alert("Opps! something went wrong");
                }
            });
        }
    </script>

    @endsection