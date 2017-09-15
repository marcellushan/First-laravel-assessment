<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>

    $(function() {
        $( "#skills" ).autocomplete({
            source: 'http://localhost:8888/assessment/public/search.php'
        });
    });
</script>
</head>
<body>

<div class="ui-widget">

    <input name = "course" id="skills" placeholder="required" required>
</div>
