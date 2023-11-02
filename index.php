<?php $slides = [
    1 => [
        'title' => 'Email Summary',
        'body' => '<p>Imagine a user gets a long email. Their instinct is to either skim it or leave for later. This ‘workflow’ can lead to bad issues. Now imagine that user has OX AI in their Inbox.</p><p class="lead"><strong>In short OX AI helps users:</strong></p><ul><li>To not be put off by long emails</li><li>To become more efficient with their emails</li><li>To make sure that nothing is ever missed</li></ul>',
    ],
    2 => [
        'title' => 'Quick Reply',
        'body' => '<p>Imagine a user is under pressure to reply to an email. Their only option is to reply fast, and often without the care needed. Now imagine that user has OX AI in their Inbox.</p><p class="lead"><strong>OX AI will:</strong></p><ul><li>Generate a high quality and well written reply</li><li>Let users edit the generated reply, or simply send it as is</li><li>Respond in a timely manner with little effort</li></ul>',
    ],
    3 => [
        'title' => 'Custom Replies',
        'body' => '<p>A user has a specific reply in mind and needs help to produce a response quickly. OX AI guides them to generate a reply based on the style, tone, and length that the user selects.</p><p class="lead"><strong>In short OX AI helps users:</strong></p><ul><li>Generate a custom reply based on style, tone, and length</li><li>Select formal, neutral, or informal styles to reply</li><li>Select excited, friendly, positive, neutral, rejecting, disappointed tones to reply</li><li>Select short, medium, or long length to reply</li></ul>',
    ],
] ?>
<!doctype html>
<html class="no-js" lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,minimum-scale=1">
    <meta name="robots" content="noindex, nofollow" />
    <title>OX AI – Preview</title>

    <link rel="icon" type="image/png" sizes="16x16" href="public/img/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/img/favicon-96x96.png">

    <link href="public/styles.css" rel="stylesheet" type="text/css">
    <script defer src="public/index.js"></script>
</head>

<body>
<main>
    <div class="container-xxl">
        <div class="row py-4 py-md-10">
            <div class="col-12">
                <h1>STICKIES</h1>
            </div>
        </div>
        <div class="sticky-row">
            <?php foreach ($slides as $index => $slide) : ?>
                <div class="sticky-col" data-index="<?= $index ?>">
                    <div class="card">
                        <div class="card-media">
                            <video autoplay="" muted="" loop="" playsinline="">
                                <source src="./public/video/ox-videoanimation-grafik-1.mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="ps-2 content-col" data-index="<?= $index ?>">
                    <h2><?= $slide['title'] ?></h2>
                    <?= $slide['body'] ?>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row" style="height: 200vh;">
            <div class="col-12">
                <h2>Ich bin eine weitere Section in der Content vorkommen kann.</h2>
            </div>
        </div>
    </div>

</main>
</body>
</html>
