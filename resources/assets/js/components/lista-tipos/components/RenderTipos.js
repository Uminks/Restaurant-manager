import React, { Component } from 'react';
import PropTypes from 'prop-types';

class RenderTipos extends Component {
	
	constructor(props){
		super(props);
	}

	handleClick(e){
		this.props.handleDelete(this.props);
	}

	handleShow(e){
		this.props.handleShowPlatos(this.props);
	}

	render(){

		let estilosAuxiliares = {
			fontSize: 20
		}

		return(
			<li id="Titulo" className="noStyle">
				<img src={this.props.image} alt="Imagen"/>
				<a href="#cartaTitulo" data-toggle="modal" onClick={this.handleShow.bind(this)}><p>{this.props.titulo}</p></a>

				{this.props.handleDelete &&

					<button className="pull-right btn btn-danger" onClick={this.handleClick.bind(this)}>
						<i className="far fa-trash-alt" style={estilosAuxiliares}></i>
					</button>

				}

			</li>
		)
	}
		
}

export default RenderTipos;
   	
						
						
				