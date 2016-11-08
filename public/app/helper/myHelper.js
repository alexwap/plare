function apiModifyTable(originalData,id,response){
    angular.forEach(originalData, function (users,key) {
        if(users.id == id){
            originalData[key] = response;
        }
    });
    return originalData;
}