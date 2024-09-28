"use strict";
NioApp,
    jQuery,
    dragula([
        document.querySelector("#basicLeft"),
        document.querySelector("#basicRight"),
    ]),
    dragula([
        document.querySelector("#basicLeftList"),
        document.querySelector("#basicRightList"),
    ]),
    dragula([
        document.querySelector("#themeLeft"),
        document.querySelector("#themeRight"),
    ])
        .on("drag", function (e) {
            e.className = e.className.replace("bg-white", "");
        })
        .on("drop", function (e) {
            e.className += " bg-warning-dim";
        }),
    dragula(
        [
            document.querySelector("#removeSpillLeft"),
            document.querySelector("#removeSpillRight"),
        ],
        { removeOnSpill: !0 }
    ),
    dragula(
        [
            document.querySelector("#not-removeSpillLeft"),
            document.querySelector("#not-removeSpillRight"),
        ],
        { removeOnSpill: !1 }
    ),
    dragula(
        [
            document.querySelector("#both-copySpillLeft"),
            document.querySelector("#both-copySpillRight"),
        ],
        { copy: !0 }
    ),
    dragula(
        [
            document.querySelector("#aside-copySpillLeft"),
            document.querySelector("#aside-copySpillRight"),
        ],
        {
            copy: function (e, t) {
                return t === document.querySelector("#aside-copySpillLeft");
            },
            accepts: function (e, t) {
                return t !== document.querySelector("#aside-copySpillLeft");
            },
        }
    ),
    dragula(
        [
            document.querySelector("#dragHandleLeft"),
            document.querySelector("#dragHandleRight"),
        ],
        {
            moves: function (e, t, r) {
                return r.classList.contains("handle");
            },
        }
    ),
    dragula([document.querySelector("#dragContainer")]);
