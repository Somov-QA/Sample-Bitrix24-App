function application() {}

application.prototype.bxTasksTaskList = function(taskID, domainName, callback) {
    try {

        if(taskID === null || taskID === undefined) return;
        BX24.callMethod('tasks.task.list', {
            filter:{
                ID:taskID
            }
        }, function(res){
            var tasks = res.answer.result.tasks;
            if(tasks.length > 0){
                var taskResponsibleLink = res.answer.result.tasks[0].responsible.link;
                var taskResponsibleName = res.answer.result.tasks[0].responsible.name;
                console.log('<a href="//'+domainName+taskResponsibleLink+'tasks/task/view/'+taskID+'/" target="_blank">перейти</a>');
            }
        });
    }catch(e) {
        console.log('Не удалось получить ссылку на задачу (ID:'+taskID+')');
    }
}

app = new application();