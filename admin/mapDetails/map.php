<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<div style="overflow:hidden;height:500px;width:600px;">
    <div id="gmap_canvas" style="height:500px;width:600px;">
        <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
        <a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">themecircle.net</a>
    </div>
</div>
<script type="text/javascript">
    function init_map(){
        var myOptions = {
            zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),
            mapTypeId: google.maps.MapTypeId.ROADMAP};
        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
        marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});
        infowindow = new google.maps.InfoWindow({content:"<b>Company Name</b><br/>2880 Broadway<br/> New York" });
        google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
        infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
</script>