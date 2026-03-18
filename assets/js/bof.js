(function (top, doc) {
    "use strict";
    if (top.location !== doc.location) {
        top.location.href = doc.location.href;
    }
})(this.top, this.document);
