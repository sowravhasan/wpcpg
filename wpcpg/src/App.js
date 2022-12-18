import 'bootstrap/dist/css/bootstrap.min.css';
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import Card from 'react-bootstrap/Card';
import Tab from 'react-bootstrap/Tab';
import Tabs from 'react-bootstrap/Tabs';
import './App.css';
import Posts from './components/Posts.js';

function App() {
	return (
		<div className="App">
			<div className="container card-0 justify-content-center p-5">
				<header className="row justify-content-center my-4">
					<div className="col-md-10 col">
						<h3 className="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">WordPress Custom Post Type Code
							Generator</h3>
						<p className="mt-md-4 ml-md-0 ml-2 text-center text-sm-left">Generate online the code you need for your
							custom post types in WordPress.</p>
					</div>
				</header>
				<Card className="border-0 shadow-lg">
					<Card.Header className="border-semi-light">
						<Form className='p-4'>
							<div className="row">
								<div class="col-md-6">
									<Form.Group className="mb-3 text-start" controlId="formBasicEmail">
										<Form.Label>Text Domain</Form.Label>
										<Form.Control className="form-control" type="text" placeholder="Type a label for Name" id="input_text_domain" onkeyup="" />
									</Form.Group>
								</div>
								<div class="col-md-6">
									<Form.Group className="mb-3 text-start" controlId="formBasicEmail">
										<Form.Label>Description</Form.Label>
										<Form.Control className="form-control" type="text" placeholder="Type a label for Description" id="input_description" onkeyup="" />
									</Form.Group>
								</div>
							</div>
						</Form>
					</Card.Header>
					<Card.Body>
						<Form className='p-4'>
							<Card.Text>
								<Tabs
									defaultActiveKey="posts"
									id="custom-post-generator"
									className="mb-3"
									justify
								>
									<Tab eventKey="posts" title="Custom Post Type Type">
										<div className="my-4">
											<Posts />
										</div>
									</Tab>
									<Tab eventKey="taxonomies" title="Taxonomies">
										<div className="my-4">
											78987987987
										</div>
									</Tab>
								</Tabs>
							</Card.Text>
							<Button variant="primary">Go somewhere</Button>
						</Form>
					</Card.Body>
					<Card.Footer className="border-semi-light">
						<div className="row justify-content-center my-3 text-center">
							<div className="col-md-12 col-lg-10 col-12">
								Developed by <a href="https://www.rafamemmel.com">Rafael Memmel</a>
							</div>
						</div>
					</Card.Footer>
				</Card>
			</div>
		</div>
	);
}

export default App;
