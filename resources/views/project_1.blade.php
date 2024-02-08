@extends('master')

@section('content')
    {{-- 
    Data & templates
    Click events
    Conditional Rendering
--}}
    <div id="test">

        <div v-if="showDOM">
            <p>
                <span @click="changeTitle()" >@{{ title }}</span> - @{{ bookAge }}</p>
            <button @click="bookAge++">increment</button>
            <button @click="bookAge--">decrease</button>
            <p @click="changeTitle()"> change title </p>

        </div>
        <button @click="toggleShowDom()">
            <span v-if="showDOM"> hide DOM</span>
            {{--          <span v-if="!showDOM"> show DOM</span>  --}}
            <span v-else> show DOM</span>
        </button>
        <p v-show="showDOM"> currently showing DOM</p>




    </div>


    <script>
        const test = Vue.createApp({
            /*    template: ' <p> i am zabeer</p>'  */

            data() {
                return {
                    showDOM: false,
                    title: ' the final empire',
                    bookAge: 100
                }
            },
            methods: {
                changeTitle() {
                    this.title = ' title changed'
                },
                toggleShowDom() {
                    this.showDOM = !this.showDOM
                }
            }
        })

        test.mount('#test')
    </script>
@endsection
