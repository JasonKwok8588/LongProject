import React from '@react';

class P extends React.Component {
    constructor(){
        super();
        this.state = {
            text: 'hello, nanachi'
        };
    }
    componentDidMount() {
        // eslint-disable-next-line
        console.log('page did mount!');
    }
    componentWillMount() {
        // eslint-disable-next-line
        console.log('page will mount!');
    }
    render() {
        return (
            <div>
                {this.state.text}
            </div>
        );
    }
}     
export default P;