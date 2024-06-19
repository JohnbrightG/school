											@if ($navigations)
												@foreach ($navigations as $navigation)
												<tr>
													<td>{{$navigation->id}}</td>
													<td>{{$navigation->name}}</td>
													
													<td>
														@if ($navigation->parent == 0)
															Parent 
														@else
															{{ navigationParent($navigation->parent) }}
														@endif
													</td>
													<td>{{$navigation->order}}</td>
													
													<td>@if ($navigation->status == 0)
															<span class="badge bg-danger">Inactive</span>
														@elseif ($navigation->status == 1)
															<span class="badge bg-success">Active</span>
														@endif
													</td>
													<td><a class="view" href=""><i class="fas fa-eye"></i></a><a class="edit" href="{{route('navigation.edit', base64_encode($navigation->id))}}"><i class="far fa-edit"></i></a>
													<a onclick="navigation_delete({{ $navigation->id }})" href="javascript:void(0)" data-id="{{$navigation->id}}" data-original-title="Delete"><i class="fas fa-trash"></i></a></td>
														
												</tr>
												@endforeach
												
												<tr>
												<td colspan="6">{{ paginateLinks($navigations) }}</td>
												<tr>
                                            @endif