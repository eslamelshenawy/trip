<?php

namespace App\Repositories;

use App\Interface\DriverRepositoryInterface;
use App\Models\Driver;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DriverRepository extends BaseRepository implements DriverRepositoryInterface
{

    use AuthenticatesUsers;
    /**
     * DriverRepository constructor.
     *
     * @param User $model
     */
    public function __construct(Driver $model)
    {
        parent::__construct($model);
    }

    /**
     * @return store
     */
    public function store($data)
    {
        $validator = \Validator::make($data, [
            'firstName' => 'required|string|min:4',
            'lastName' => 'required|string|min:4',
            'email' => 'required|email',
            'telephone' => 'required|min:11|numeric',
            'birthdate' => 'required',
            'nationality' => 'required',
            'carType' => 'required',
            'carModel' => 'required',
            'capacity' => 'required',
            'skiBox' => 'required|string|in:yes,No',
            'file' => 'required|image',
            'fileLicenseInput' => 'required|image',
            'criminalRecord' => 'required|image',
        ]);

        if ($validator->passes()) {
            $imageFile = $data['file'];
            $name = time() . '.' . $imageFile->getClientOriginalExtension();
            $destinationPath = public_path('images/files');
            $pathFile = url('/') . '/images/files';
            $imageFile->move($destinationPath, $name);
            //
            $imagefileLicenseInput = $data['fileLicenseInput'];
            $name = time() . '.' . $imagefileLicenseInput->getClientOriginalExtension();
            $destinationPath = public_path('images/License');
            $pathLicense = url('/') . '/images/License';
            $imagefileLicenseInput->move($destinationPath, $name);
            //
            $imagecriminalRecord = $data['criminalRecord'];
            $name = time() . '.' . $imagecriminalRecord->getClientOriginalExtension();
            $destinationPath = public_path('images/criminalRecord');
            $pathcriminalRecord = url('/') . '/images/criminalRecord';
            $imagecriminalRecord->move($destinationPath, $name);
            $this->model->firstName = $data['firstName'];
            $this->model->email = $data['email'];
            $this->model->lastName = $data['lastName'];
            $this->model->password = $data['password'];
            $this->model->telephone = $data['telephone'];
            $this->model->birthdate = $data['birthdate'];
            $this->model->nationality = $data['nationality'];
            $this->model->carType = $data['carType'];
            $this->model->carModel = $data['carModel'];
            $this->model->capacity = $data['capacity'];
            $this->model->skiBox = $data['skiBox'];
            $this->model->file = $data['file'];
            $this->model->fileLicenseInput = $data['fileLicenseInput'];
            $this->model->criminalRecord = $data['criminalRecord'];
            $this->model->save();
            return response()->json(['success' => 'You are successfully created in.']);
        }
        return response()->json(['error' => $validator->errors()]);
    }

}
