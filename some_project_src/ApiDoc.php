<?php

/**
 * @OA\Info(
 *   title="MyAwesomeAPI - API",
 *   version="0.0.0",
 *   description="Documentation of Core API for MyAwesomeAPI"
 * )
 *
 * @OA\Server(
 *     url="https://api.example.com",
 * 	   description="MyAwesomeAPI - Production environment"
 * )
 *
 * @OA\Server(
 *     url="https://test.api.example.com",
 * 	   description="MyAwesomeAPI - Test environment"
 * )
 * 
 * @OA\Schema(
 *      schema="resource_id",
 *      type="integer",
 *      minimum=1,
 *      description="The unique identifier of a resource",
 *      example="1"
 * )
 * 
 * 
 * @OA\Schema(
 *      schema="auth_resource",
 *      type="object",
 *      required={"logged_in_user", "token"},
 *      @OA\Property(property="token", type="string", description="The token", example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMTc3ZjA3MTc1NWU3YjRiMjM3NDBhNTM1MDkxNDA1NzI0YjViNTRlNDQzYjhjZmI3ZDZmYzBmYWUzZGM4OTBhM2VjZDAwYjQ3OGJmZTgwOTEiLCJpYXQiOjE2MDA3ODExMDEsIm5iZiI6MTYwMDc4MTEwMSwiZXhwIjoxNjMyMzE3MTAxLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.R_8MKAEf2rFf8qzQceaCq7cYdecXEeX2pNWoxEY5lBPnk_sj37BqQV8BMZrnYYY2w6kOjVmUCIJtu47RzlnDIB6nyKC5SGbg-S6ImfsrYOyx5R2w4cMKStc9jzJ9xq5Ya2p1-F4eIEM2nUCDhaMFfLB3UiL7fhabRMkT3URIwSdw3DdAj3PQDvkHmtDzi_xfqSfQ88E7xE2WKIVEgr-t6e2UklNGv3ClWQcOoLuOz4O-V37PF10Sy7JeCYe1bKfYYcCnshl8aEXqcLCYbKR6DBBvT2AbwBqleWfECxJM6KI3l0q-TVjX362xCnVYDnOeNntCzRP03kNZ7FBJcRckE86AYWNa_lDVmenuD4QeCYdjxIYEsVRtfvibLO7ZhdLoIl3TrbBBsQJrQ9WPqo3IIY2KLDZE7fllFCA93kBZBo9jiJMpbFMEb-YfdRKYtLnyeR0rU7zrfY9gdGAiOXV35BwTFdtDHj_31VfIbdkN7c60J07iq-6TBCp2io_-FYg0RW-dv1eYl0ZYaQvhZtrdNMJI4dFdCLarHg12LFbbS1YjkIv-khxBVej_cqaW4Bw6kk5ZRG3-F6HrpZwybXi3Ar-efz8hWS_EBQE8KfqoVY1ZncxtkwUWlebIAjaH5ivgTn4X_5RTDgVNsBOByXREJhl2e4iHVVDN2elYWllb-Lo"),
 * )
 * 
 * @OA\Schema(
 *      schema="unauthorized_resource",
 *      type="object",
 *      required={"message"},
 *      @OA\Property(property="message", type="string", description="The message", example="Unauthorized")
 * )
 * 
 * @OA\Schema(
 *      schema="message_resource",
 *      type="object",
 *      required={"message"},
 *      @OA\Property(property="message", type="string", description="The message", example="message response")
 * )
 * 
 * * @OA\Schema(
 *      schema="date_resource",
 *      type="object",
 *      required={"date", "timezone_type", "timezone"},
 *      @OA\Property(property="date", type="date", description="the date", example="2019-01-17 11:00:00.000000"),
 *      @OA\Property(property="timezone_type", type="string", description="The timezone type", example="3"),
 *      @OA\Property(property="timezone", type="string", description="The timezone", example="UTC"),
 * )
 * 
 *  @OA\SecurityScheme(
 *     type="http",
 *     name="bearerAuth",
 *     securityScheme="bearer",
 *     scheme="bearer",
 *     bearerFormat="JWT",
 * )
 * 
 * @OA\Schema(
 *      schema="validate_message_user",
 *      type="object",
 *      required={"message"},
 *      @OA\Property(property="message", type="String", description="the message of validation", example="Successfully created user!"),
 * 
 * )
 * 
 * 
 * @OA\Delete(
 *     path="/animals/{animalId}",
 *     summary="Delete an Animal",
 *     tags={"Animal"},
 * 	   @OA\Response(
 *         response=200,
 *         description="successful operation",
 *     )
 * )
 */

namespace App;

class ApiDoc {
}
