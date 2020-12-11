function randomID() {
    return "a" + Math.floor(Math.random() * (9898989898 - 1212121212) ) + 1212121212;
}

function resetFileStats(files) {
    return new Promise((resolve, reject) => {
        fetch('/reset.php').then(response => {
            resolve(files);
        }).catch(error => {
            reject(error);
        });
    });
}

function getFileStats(sessionID) {
    return new Promise((resolve, reject) => {
        fetch('/watch.php?id=' + sessionID).then(response => {
            if (response.headers.get("content-type") != "application/json") {
                resolve(response.status);
            }

            return response.json();
        }).then(files => {
            resolve(files);
        }).catch(error => {
            reject(error);
        });
    });
}

var sessionID = randomID();

setInterval(() => {
    getFileStats(sessionID).then(response => {
        if (response !== 200) {
            location.reload();
        }
    }).catch(error => {
        console.error(error);
    });
}, 500);
