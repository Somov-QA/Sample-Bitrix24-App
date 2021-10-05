function application() {}

application.prototype.bxTasksTaskList = function(taskID, domainName, callback) {
    try {
        if(taskID === null || taskID === undefined) return;
        BX24.callMethod('tasks.task.list', {}, function(res){
            var tasks = res.answer.result.tasks;
            var count = tasks.length;
            if(tasks.length > 0){
                for(var i = 0; i < count; i++){
                    var taskResponsibleLink = res.answer.result.tasks[i].responsible.link;
                    var taskResponsibleName = res.answer.result.tasks[i].responsible.name;
                }
            }
        });
    }catch(e) {
        console.log('Не удалось получить список задачь');
    }
}

app = new application();