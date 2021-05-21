var urlTheme = document.querySelector("body").getAttribute("data-themeurl");

var cities = L.layerGroup();
var greenIcon = L.icon({
  iconUrl: urlTheme + "/assets/images/pin-pink.png",
  shadowUrl: urlTheme + "/assets/images/pin-shadow.png",
  iconSize: [30, 42], // size of the icon
  shadowSize: [35, 14], // size of the shadow
  iconAnchor: [16, 41], // point of the icon which will correspond to marker's location
  shadowAnchor: [2, 14], // the same for the shadow
  popupAnchor: [-3, -50] // point from which the popup should open relative to the iconAnchor
});
L.marker([-3.7746394, -38.4805328], {
  icon: greenIcon
})
  .bindPopup(
    '<h3>Atratis Digital</h3>Rua Dr. Carlos Ribeiro Pamplona, </br>100 - Edson Queiroz, Fortaleza - CE</br><a style="font: 600 .75rem Montserrat,Arial,helvetica,sans-serif;border-radius: 1.875rem;  margin-top: 10px;  background: #e9436e;    border: 0;    color: #fff;    cursor: pointer;    display: -ms-flexbox;    display: flex;    height: 2.5rem;    -ms-flex-pack: center;    justify-content: center;    padding: 12px 30px;    transition: all .6s;    text-transform: uppercase;    width: auto;"  target="_blank" href="https://www.google.com/maps/search/?api=1&query=-3.808224, -38.494428">Traçar Rota</a>'
  )
  .addTo(cities);

var mbAttr =
    'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    'Implementation by:  &copy; <a href="http://atratis.com.br/">Atratis</a>, ' +
    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  mbUrl =
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw";

var streets = L.tileLayer(mbUrl, {
    id: "mapbox/streets-v11",
    tileSize: 512,
    zoomOffset: -1,
    attribution: mbAttr
  }),
  grayscale = L.tileLayer(mbUrl, {
    id: "mapbox/light-v9",
    tileSize: 512,
    zoomOffset: -1,
    attribution: mbAttr
  });

var map = L.map("map-leaflet", {
  center: [-3.7746394, -38.4805328],
  zoom: 15,
  zoomControl: false,
  layers: [cities, streets]
});

var baseLayers = {
  Completo: streets,
  Ruas: grayscale
};

L.control.layers(baseLayers).addTo(map);

// custom zoom bar control that includes a Zoom Home function
L.Control.zoomHome = L.Control.extend({
  options: {
    position: "topright",
    zoomInText: "+",
    zoomInTitle: "Zoom in",
    zoomOutText: "-",
    zoomOutTitle: "Zoom out",
    zoomHomeText: '<i class="fa fa-home" style="line-height:1.65;"></i>',
    zoomHomeTitle: "Zoom home"
  },

  onAdd: function (map) {
    var controlName = "gin-control-zoom",
      container = L.DomUtil.create("div", controlName + " leaflet-bar"),
      options = this.options;

    this._zoomInButton = this._createButton(
      options.zoomInText,
      options.zoomInTitle,
      controlName + "-in",
      container,
      this._zoomIn
    );
    this._zoomHomeButton = this._createButton(
      options.zoomHomeText,
      options.zoomHomeTitle,
      controlName + "-home",
      container,
      this._zoomHome
    );
    this._zoomOutButton = this._createButton(
      options.zoomOutText,
      options.zoomOutTitle,
      controlName + "-out",
      container,
      this._zoomOut
    );

    this._updateDisabled();
    map.on("zoomend zoomlevelschange", this._updateDisabled, this);

    return container;
  },

  onRemove: function (map) {
    map.off("zoomend zoomlevelschange", this._updateDisabled, this);
  },

  _zoomIn: function (e) {
    this._map.zoomIn(e.shiftKey ? 3 : 1);
  },

  _zoomOut: function (e) {
    this._map.zoomOut(e.shiftKey ? 3 : 1);
  },

  _zoomHome: function (e) {
    map.setView([-3.7746394, -38.4805328], 15);
  },

  _createButton: function (html, title, className, container, fn) {
    var link = L.DomUtil.create("a", className, container);
    link.innerHTML = html;
    link.href = "#";
    link.title = title;

    L.DomEvent.on(link, "mousedown dblclick", L.DomEvent.stopPropagation)
      .on(link, "click", L.DomEvent.stop)
      .on(link, "click", fn, this)
      .on(link, "click", this._refocusOnMap, this);

    return link;
  },

  _updateDisabled: function () {
    var map = this._map,
      className = "leaflet-disabled";

    L.DomUtil.removeClass(this._zoomInButton, className);
    L.DomUtil.removeClass(this._zoomOutButton, className);

    if (map._zoom === map.getMinZoom()) {
      L.DomUtil.addClass(this._zoomOutButton, className);
    }
    if (map._zoom === map.getMaxZoom()) {
      L.DomUtil.addClass(this._zoomInButton, className);
    }
  }
});
// add the new control to the map
var zoomHome = new L.Control.zoomHome();
zoomHome.addTo(map);
