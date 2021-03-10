Vue.component('modal', {
    template:`
             <div class="modal is-active">
              <div class="modal-background">
            </div>
            <div class="modal-content">
                <div class="box">
                  <p>
                  Welcome, Please clear this message 
                  </p>
                </div>
            </div>
              <button v-on:click="$emit('close')" class="modal-close is-large" aria-label="close"></button>
          </div>
    `
});

Vue.component('message', {

    props:['title','body'],           // Dont forget else it wont recognize {{title}} and body if not specified for html

    data(){
        return{
            isVisible:true                 // isVisible is set to true just used as boolean
                                         // when click button its setting to false  and that triggers v-show
        };
    },

    template:` 
    <article class="message" v-show="isVisible">
    
        <div class="message-header">
          {{ title }}

          <button v-on:click="isVisible=false">x</button>
        </div>
    
        <div class="message-body">
          {{ body }}
        </div>
    
    </article>
      `
    
    });
Vue.component('list', {

    // used backticks here nor sure why and use the previos Task tag and a for for our list as well as a {{}} to echo in <list>
    //coz <Task> can taje any property as it has a slot tag in the original Task tag
    //so Tasj to list and its slot to display and loop through our list of tasks though 
    template:`
    <div>
    
    <Task v-for="task in tasks">{{ task.task }}</Task>
    
    </div>
    
    `,

     data() {                   //data in vue components is different it doesnt use : rather acts as function

       return {               // and you gotta return same like function  buh essence is same 

            tasks: [

            {task:'Go sleep',completed:true},
            {task:'Go eat',completed:false},
            {task:'Go play',completed:true},
            {task:'Go sit',completed:false}
            
           ]
        };
    }
});

Vue.component('Task', {
                                              // <task><task> will now be able to be read in html 
    template:'<li><slot></slot></li>'        // slot allows the user to tye in whatever he wants

})

new Vue({                       // dont forget Capital letters

    el: '#root',               // this is the main element id 

    data:{                     // all the data for  vue 
        message: 'Alhamdulilah',
        NewName: '',
        names: ['arbee','brad','otherpeople'],
        title: 'Some title in Javascript',             // adds title for title attr when v-bind
        tasks: [
             {description:'Go sleep',completed:true},
             {description:'Go eat',completed:false},
             {description:'Go play',completed:true},
             {description:'Go sit',completed:false}

        ],
        showModal:false
    },

    methods: {

        addName() {
            this.names.push(this.NewName)    // this refers to the data , and pushing input into array

            this.NewName = '';               // clearing input 
        }

    },

    computed:{                             // computed reacts with data and much faster than if else 

            IncompleteTasks(){
                return this.tasks.filter(tasks => ! tasks.completed);
            }

    }


})



