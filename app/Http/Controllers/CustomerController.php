<?php
  
namespace App\Http\Controllers;
  
use App\Customer;
use Illuminate\Http\Request;
  
class CustomerController extends Controller
{
    
    public function index()
    {
        $customers = Customer::latest()->paginate(5);
  
        return view('customers.index',compact('customers'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
   
        public function create()
    {
        return view('customers.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required',
            'town_name' => 'required',
            'gender_id' => 'required'
        ]);
  
        Customer::create($request->all());
   
        return redirect()->route('customers.index')
                        ->with('success','Customer created successfully.');
    }
   
    
    public function show(Customer $customer)
    {
        return view('customers.show',compact('customer'));
    }
   
    
    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }
  
   
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'town_name' => 'required',
            'gender_id' => 'required',
        ]);
  
        $customer->update($request->all());
  
        return redirect()->route('customers.index')
                        ->with('success','Customer updated successfully');
    }
  
    
    public function destroy(Customer $customer)
    {
        $customer->delete();
  
        return redirect()->route('customers.index')
                        ->with('success','Customer deleted successfully');
    }


}