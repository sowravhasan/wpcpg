import 'bootstrap/dist/css/bootstrap.min.css';
import Form from 'react-bootstrap/Form';

function Posts() {
    return (
        <div className="row justify-content-center">
            <div className="col-lg-5 col-md-6 col-sm-12">
                <Form.Group className="mb-3 text-start" controlId="input_name">
                    <Form.Label>Name</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Name" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_singular_name">
                    <Form.Label>Singular Name</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Singular Name" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_menu_name">
                    <Form.Label>Menu Name</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Menu Name" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="name_admin_bar">
                    <Form.Label>Admin Bar Name</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Admin Bar Name" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_add_new">
                    <Form.Label>Add New</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Add New" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_add_new_item">
                    <Form.Label>Add New Item</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Add New Item" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_new_item">
                    <Form.Label>New Item</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for New Item" onkeyup="" />
                </Form.Group>
            </div>
            <div className="col-lg-5 col-md-6 col-sm-12">
                <Form.Group className="mb-3 text-start" controlId="input_edit_item">
                    <Form.Label>Edit Item</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Edit Item" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_view_item">
                    <Form.Label>View Item</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for View Item" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_all_items">
                    <Form.Label>All Items</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for All Items" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_search_items">
                    <Form.Label>Search Items</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Search Items" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_parent_item">
                    <Form.Label>Parent Item Colon</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Parent Item Colon" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_not_found">
                    <Form.Label>Not Found</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Not Found" onkeyup="" />
                </Form.Group>
                <Form.Group className="mb-3 text-start" controlId="input_not_found_in_trash">
                    <Form.Label>Not Found in Trash</Form.Label>
                    <Form.Control className="form-control" type="text" placeholder="Type a label for Not Found in Trash" onkeyup="" />
                </Form.Group>
            </div>
        </div>
    );
}

export default Posts;