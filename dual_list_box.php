<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="lib/dualselect/css/dualselect-1.0.min.css" />
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" language="javascript" src="lib/dualselect/js/dualselect-1.0.min.js"></script>
		<script type="text/javascript" language="javascript">
			function optionChanged(elm) {
				console.log('optionChanged', jQuery(elm).val());
			}
			jQuery(document).ready(function() {
				dualselect1 = jQuery('#select1').dualselect({
					moveOnSelect: true
					,showMoveButtons: true
					,showFilters: false
				});

				dualselect2 = jQuery('#select2').dualselect({
					beforeSelectOption: function (_option) {
						if (_option.text().indexOf('option30') >= 0) {
							alert('option30 selection not allowed');
							return false;
						}
						return true;
					}
					,beforeRemoveOption: function (_option) {
						if (_option.text().indexOf('option25') >= 0) {
							alert('option25 removal not allowed');
							return false;
						}
						return true;
					}
					,moveOnSelect: false
					,showMoveButtons: true
					,showFilters: true
				});
			});
		</script>
		<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<title>jQuery Dual Select Box Examples</title>
		<style>
			html,* {font-family: 'Roboto Condensed';}
			body { background-color: #222; color: #fff;  }
			.container { margin: 150px auto; max-width: 960px; }
		</style>
	</head>
	<body><div id="jquery-script-menu">
<div class="jquery-script-center">
<ul>
<li><a href="https://www.jqueryscript.net/form/multi-dual-select.html">Download This Plugin</a></li>
<li><a href="https://www.jqueryscript.net/">Back To jQueryScript.Net</a></li>
</ul><div id="carbon-block"></div>
<div class="jquery-script-ads">

<script type="text/javascript"
src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></div>
<div class="jquery-script-clear"></div>
</div>
</div>
		<div class="container">
			<h1>jQuery Dual Select Box Examples</h1>
			<p>Just another jQuery dual list box plugin that converts a normal multiple select element into a dual select interface for easier selection.</p>
			<h2>Basic</h2>
		<form type="post">
			<select id="select1" name="select1_name_" multiple="multiple" size="5" onchange="optionChanged(this);">
				<option value="o1value" disabled>1-option</option>
				<option value="o2value">2-option</option>
				<option value="o3value">3-option</option>
				<option value="o4value" disabled>4-option</option>
				<option value="o5value">5-option</option>
				<option value="o6value">6-option</option>
				<option value="o7value" selected disabled>7-option</option>
				<option value="o8value">8-option</option>
				<option value="o9value" selected>9-option</option>
				<option value="o10value">10-option</option>
				<option value="o11value" selected>11-option</option>
				<option value="o12value" selected>12-option</option>
				<option value="o13value">13-option</option>
				<option value="o14value">14-option</option>
				<option value="o15value">15-option</option>
				<option value="o16value">16-option</option>
				<option value="o17value">17-option</option>
				<option value="o18value">18-option</option>
				<option value="o19value">19-option</option>
				<option value="o20value">20-option</option>
			</select>
			<h2>Advanced Usage:</h2>
			<select id="select2" name="select2" multiple="multiple" size="15">
				<option value="value21">option21</option>
				<option value="value22">option22</option>
				<option value="value23">option23</option>
				<option value="value24">option24</option>
				<option value="value25">option25</option>
				<option value="value26">option26</option>
				<option value="value27">option27</option>
				<option value="value28">option28</option>
				<option value="value29">option29</option>
				<option value="value30">option30</option>
				<option value="value31">option31</option>
				<option value="value32">option32</option>
				<option value="value33">option33</option>
				<option value="value34">option34</option>
				<option value="value35">option35</option>
				<option value="value36">option36</option>
				<option value="value37">option37</option>
				<option value="value38">option38</option>
				<option value="value39">option39</option>
				<option value="value40">option40</option>
			</select>
		</form>
	</div>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>