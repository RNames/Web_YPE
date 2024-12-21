<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\DestinationModel;

class DestinationController extends BaseController
{
    protected $destinationModel;

    public function __construct()
    {
        $this->destinationModel = new DestinationModel();
    }

    public function index()
    {
        $data['destinations'] = $this->destinationModel->findAll();

        return view('pages/admin/destination/index', $data);
    }

    public function create()
    {
        return view('pages/admin/destination/create');
    }

    public function store()
    {
        // Validate input data
        $validationRules = [
            'title' => 'required',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png]|max_size[image,2048]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Handle image upload
        $imageFile = $this->request->getFile('image');
        $imageName = $imageFile->getRandomName();
        $imageFile->move(ROOTPATH . 'public/assets/images/destinations', $imageName);


        // Insert data into the database
        $this->destinationModel->insert([
            'seo_tag_title_id' => $this->request->getPost('seo_tag_title_id'),
            'seo_tag_title_en' => $this->request->getPost('seo_tag_title_en'),
            'seo_description_id' => $this->request->getPost('seo_description_id'),
            'seo_description_en' => $this->request->getPost('seo_description_en'),
            'title' => $this->request->getPost('title'),
            'slug' => $this->request->getPost('slug'),
            'sub_title' => $this->request->getPost('sub_title'),
            'type_of_tour_id' => $this->request->getPost('type_of_tour_id'),
            'type_of_tour_en' => $this->request->getPost('type_of_tour_en'),
            'price_id' => $this->request->getPost('price_id'),
            'price_en' => $this->request->getPost('price_en'),
            'duration_id' => $this->request->getPost('duration_id'),
            'duration_en' => $this->request->getPost('duration_en'),
            'location_id' => $this->request->getPost('location_id'),
            'location_en' => $this->request->getPost('location_en'),
            'includes_id' => $this->request->getPost('includes_id'),
            'includes_en' => $this->request->getPost('includes_en'),
            'description_id' => $this->request->getPost('description_id'),
            'description_en' => $this->request->getPost('description_en'),
            'route_id' => $this->request->getPost('route_id'),
            'route_en' => $this->request->getPost('route_en'),
            'accomodation_id' => $this->request->getPost('accomodation_id'),
            'accomodation_en' => $this->request->getPost('accomodation_en'),
            'itinerary_notes_id' => $this->request->getPost('itinerary_notes_id'),
            'itinerary_notes_en' => $this->request->getPost('itinerary_notes_en'),
            'hotel_flights_id' => $this->request->getPost('hotel_flights_id'),
            'hotel_flights_en' => $this->request->getPost('hotel_flights_en'),
            'tour_period_id' => $this->request->getPost('tour_period_id'),
            'tour_period_en' => $this->request->getPost('tour_period_en'),
            'created_at' => date('Y-m-d H:i:s'),
            'image' => $imageName,
        ]);

        // Redirect to the destination list with success message
        return redirect()->to('admin/destination')->with('success', 'Destination created successfully.');
    }

    public function edit($id)
    {
        $data['destination'] = $this->destinationModel->find($id);

        return view('pages/admin/destination/edit', $data);
    }


    public function update($id)
    {
        // Validate input data
        $validationRules = [
            'title' => 'required|min_length[3]',
            'description_id'  => 'required',
            'description_en'  => 'required',
            'image'    => 'if_exist|max_size[image,2048]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'seo_tag_title_id' => $this->request->getPost('seo_tag_title_id'),
            'seo_tag_title_en' => $this->request->getPost('seo_tag_title_en'),
            'seo_description_id' => $this->request->getPost('seo_description_id'),
            'seo_description_en' => $this->request->getPost('seo_description_en'),
            'title' => $this->request->getPost('title'),
            'slug' => $this->request->getPost('slug'),
            'sub_title' => $this->request->getPost('sub_title'),
            'type_of_tour_id' => $this->request->getPost('type_of_tour_id'),
            'type_of_tour_en' => $this->request->getPost('type_of_tour_en'),
            'price_id' => $this->request->getPost('price_id'),
            'price_en' => $this->request->getPost('price_en'),
            'duration_id' => $this->request->getPost('duration_id'),
            'duration_en' => $this->request->getPost('duration_en'),
            'location_id' => $this->request->getPost('location_id'),
            'location_en' => $this->request->getPost('location_en'),
            'includes_id' => $this->request->getPost('includes_id'),
            'includes_en' => $this->request->getPost('includes_en'),
            'description_id' => $this->request->getPost('description_id'),
            'description_en' => $this->request->getPost('description_en'),
            'route_id' => $this->request->getPost('route_id'),
            'route_en' => $this->request->getPost('route_en'),
            'accomodation_id' => $this->request->getPost('accomodation_id'),
            'accomodation_en' => $this->request->getPost('accomodation_en'),
            'itinerary_notes_id' => $this->request->getPost('itinerary_notes_id'),
            'itinerary_notes_en' => $this->request->getPost('itinerary_notes_en'),
            'hotel_flights_id' => $this->request->getPost('hotel_flights_id'),
            'hotel_flights_en' => $this->request->getPost('hotel_flights_en'),
            'tour_period_id' => $this->request->getPost('tour_period_id'),
            'tour_period_en' => $this->request->getPost('tour_period_en'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // Check if a new image has been uploaded and handle it
        if ($this->request->getFile('image')->isValid()) {
            $imageFile = $this->request->getFile('image');
            $imageName = $imageFile->getRandomName();
            $imageFile->move(ROOTPATH . 'public/assets/images/destinations', $imageName);
            $data['image'] = $imageName;
        }

        // Update the record in the database
        $this->destinationModel->update($id, $data);

        // Redirect to the destination list with success message
        return redirect()->to('/admin/destination')->with('success', 'Destination updated successfully.');
    }



    public function delete($id)
    {
        $this->destinationModel->delete($id);
        return redirect()->to('/admin/destination')->with('success', 'Destination deleted successfully');
    }
}
